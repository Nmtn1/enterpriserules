<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\RegisterForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Регистрация';

?>
<div class="site-register" style="max-width:500px; margin:50px auto; padding:20px; background-color:#eaf4f6; border-radius:10px; box-shadow:0 4px 12px rgba(0,0,0,0.1);">
    <h1 style="text-align:center; color:#053333; font-weight:600; margin-bottom:20px;"><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin([
        'id' => 'register-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "<div style='display:flex; flex-direction:column; margin-bottom:15px;'>\n{label}\n{input}\n{error}\n</div>",
            'labelOptions' => ['style' => 'color:#148a8a; font-weight:600; margin-bottom:5px;'],
            'inputOptions' => ['class' => 'form-control', 'style' => 'border:2px solid #148a8a; border-radius:5px; padding:8px;'],
            'errorOptions' => ['class' => 'invalid-feedback d-block', 'style' => 'margin-top:5px;'],
        ],
    ]); ?>

    <?= $form->field($model, 'name')->textInput(['autofocus' => true, 'placeholder' => 'Введите имя']) ?>
    <?= $form->field($model, 'email')->textInput(['placeholder' => 'Введите email']) ?>
    <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Введите пароль']) ?>

    <div class="form-group" style="margin-top:20px; text-align:center;">
        <?= Html::submitButton('Зарегистрироваться', [
            'class' => 'btn btn-primary',
            'style' => 'background-color:#148a8a; border:none; padding:10px 20px; font-size:16px; border-radius:5px; cursor:pointer; width:100%;'
        ]) ?>
    </div>
    <div style="text-align:center; margin-top:15px;">
        <?= Html::a('Уже зарегистрированы? Войти', ['site/login'], [
            'style' => 'color:#148a8a; font-weight:600; text-decoration:none; transition:color 0.3s;',
            'onmouseover' => 'this.style.color="#0f6060";',
            'onmouseout' => 'this.style.color="#148a8a";'
        ]) ?>
    </div>
</div>
<?php ActiveForm::end(); ?>