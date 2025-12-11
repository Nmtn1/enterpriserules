<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Rules $model */

$this->title = Yii::t('app', 'Добавить правило');

?>
<div class="rules-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
