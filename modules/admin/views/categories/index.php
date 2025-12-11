<?php

use app\models\Categories;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\CategoriesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Категории');
?>
<div class="categories-index"  style="background-color:#f5fafa; padding:20px; border-radius:8px;min-height:700px;">

    <h1 style="color:#053333; margin-bottom: 20px;"><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить новую категорию', ['create'], [
            'class' => 'btn',
            'style' => 'background-color:#148a8a; color:#f5fafa; border:none; border-radius:5px; padding:8px 15px;',
        ]) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',

            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, Categories $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                },
                'headerOptions' => ['style' => 'text-align:center;'],
                'contentOptions' => ['style' => 'text-align:center;'],
            ],
        ],
    ]); ?>

</div>