<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Правило: ' . Html::encode($rule->title);
?>
<div class="site-about" style="max-width: 800px; margin: 0 auto; padding: 20px;">
    
    <!-- Заголовок -->
    <h1 style="text-align: center; color: #053333; margin-bottom: 30px;">
        <?= Html::encode($rule->title) ?>
    </h1>
    
    <!-- Основной контент -->
    <div style="
        background-color: #eaf4f6;
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        margin-bottom: 20px;
        text-align: center;">
        
        <!-- Категория -->
        <div style="margin-bottom: 20px;">
            <span style="
                display: inline-block;
                border: 2px solid #148a8a;
                color: #148a8a;
                border-radius: 20px;
                padding: 8px 20px;
                font-weight: bold;
                background-color: #f5fafa;">
                Категория: <?= $rule->category->name ?>
            </span>
        </div>
        
        <!-- Описание -->
        <div style="
            background-color: #f5fafa;
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 25px;
            text-align: left;
            border-left: 4px solid #148a8a;">
            <p style="
                font-size: 16px;
                line-height: 1.6;
                color: #053333;
                margin: 0;">
                <?= nl2br(Html::encode($rule->description)) ?>
            </p>
        </div>
        
        <!-- Дата создания -->
        <div style="text-align: center; margin-bottom: 30px;">
            <p
            style="
            color:#148a8a;
            ">Дата создания: <?= $rule->created_at ?></p>
        </div>
        <div style="text-align: center;">
            <a href="<?= Url::to(['site/about']); ?>" 
               style="text-decoration: none; display: inline-block;">
                <div style="
                    background-color: #148a8a;
                    padding: 12px 30px;
                    text-align: center;
                    border-radius: 5px;
                    color: #f5fafa;
                    font-weight: bold;
                    font-size: 16px;
                    transition: all 0.3s ease;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    gap: 10px;
                    min-width: 150px;">
                    <?= Html::img('@web/img/arrow.png', [
                        'alt' => 'arrow',
                        'style' => 'width: 15px; transform: rotate(180deg);'
                    ]) ?>
                    Назад в личный кабинет
                </div>
            </a>
        </div>
    </div>
    
</div>
