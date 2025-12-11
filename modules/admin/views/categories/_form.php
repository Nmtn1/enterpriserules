<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Categories $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="categories-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label('Наименование категории') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Сохранить новое правило'), ['class' => 'btn', 
        'style'=>'background-color:#148a8a;color:#f5fafa;margin-top:30px;']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>