<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Rules $model */

$this->title = Yii::t('app', 'Обновить правило: {name}', [
    'name' => $model->title,
]);

?>
<div class="rules-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
