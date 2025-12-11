<?php

namespace app\controllers;


use app\models\Category;
use app\models\RegisterForm;
use Yii;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Rules;
use app\models\Categories;


class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout', 'about'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                     [
                        'actions' => ['about'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {

        $latestRules = Rules::find()->orderBy(['created_at' => SORT_DESC])->limit(5)->all();

        $context = [
            'latestRules' => $latestRules,
        ];
        return $this->render('index', $context);

    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            if(Yii::$app->user->identity->role){
                return $this->redirect(['/admin/default/index']);
            } else{
                return $this->goBack();
            }
            
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionRegister(){
        if (!Yii::$app->user->isGuest){
            return $this->goHome();
        }
        $model = new RegisterForm();
        if ($model->load(Yii::$app->request->post()) && $model->register()){
            $this->goHome();
        }
        $context = [
            'model'=>$model
        ];

        return  $this->render('register', $context);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        
        $category = Categories::find()->all();
        if ($category_name = Yii::$app->request->get('category')){
            $category_id = Categories::findOne($category_name);
            $rule = Rules::find()->where(['category_id' => $category_id])->all();
        } else{
            $rule = Rules::find()->all();
        }

        $context = [
            'rule'=> $rule,
            'category'=>$category
        ];
        return $this->render('about', $context);
    }

    public function actionMore(){
        $id = Yii::$app->request->get('id');
        $rule = Rules::findOne($id);
        $context = ['rule'=>$rule];
        return $this->render('more',$context);
    }



}
