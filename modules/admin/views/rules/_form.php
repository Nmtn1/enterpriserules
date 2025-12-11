<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Rules $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="rules-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category_id')->dropDownList(
        \app\models\Categories::getCategoryList(),
        ['prompt' => 'Выберите категорию']
    ) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Сохранить новое правило'), ['class' => 'btn', 
        'style'=>'background-color:#148a8a;color:#f5fafa;margin-top:30px;']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
