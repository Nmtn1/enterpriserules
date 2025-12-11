<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\StringHelper;

$this->title = 'Правила';
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>


    <div class="dropdown">
  <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" 
  style="background-color:#148a8a;color:#f5fafa;">
    Фильрация по категории
  </button>
  <ul class="dropdown-menu">
        <?php foreach ($category as $item): ?>
            <li><a class="dropdown-item" href="?category=<?= $item->id ?>"><?= $item->name ?></a></li>
    <?php endforeach; ?>
  </ul>
</div>
    <?php foreach ($rule as $item): ?>
        <div style="background-color:#eaf4f6;border-radius:10px;padding:10px;margin-top:10px;">
            <h3 style="color:#053333"><?= $item->title ?></h3>
            <div>
                <div>
                    <p style="
                    display: inline-block;
                    border:2px solid #148a8a;
                    color:#148a8a;
                    border-radius:10px;
                    padding:5px;">
                    Категория: <?= $item->category->name ?>
                    </p>
                </div>
            </div>
            <p><?= StringHelper::truncateWords($item->description, 20, '...') ?></p>
            <p
            style="
            color:#148a8a;
            ">Дата создания: <?= Yii::$app->formatter->asDate($item->created_at, 'short') ?></p>
        <a href="<?= Url::to(['site/more', 'id' => $item->id]); ?>" 
        style="text-decoration:none; display: inline-block;">
            <div style="
                background-color:#148a8a;
                padding:5px;
                width:150px;
                text-align:center;
                border-radius:5px;
                vertical-align:center;
                color:#f5fafa;">
                Подробнее
                <?= Html::img('@web/img/arrow.png', ['alt' => 'arrow','style'=>'width:15px;margin-bottom:3px;']) ?>
            </div>
        </a>    
    </div>
        
    <?php endforeach; ?>

</div>
