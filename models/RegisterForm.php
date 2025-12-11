<?php

namespace app\models;
use yii\db\ActiveRecord;
class RegisterForm extends ActiveRecord
{
    public $name;
    public $email;
    public $password;



    public function rules()
    {
        return [
            [['name', 'email', 'password'], 'required'],

            ['email', 'email'],
            ['email', 'unique', 'targetClass' => '\app\models\User', 'targetAttribute' => 'email'],

            ['password', 'string', 'min' => 8],
        ];
    }

   public function attributeLabels(){
        return [ 
            'name'=>'Имя',
            'email'=>'Почта',
            'password'=>'Пароль',];
    }

    public function register(){
        if (!$this->validate()){
            return false;
        }
        $user = new User();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = \Yii::$app->security->generatePasswordHash($this->password);
        $user->save();
        return true;
    }
}