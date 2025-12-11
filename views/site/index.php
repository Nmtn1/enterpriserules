<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\StringHelper;
/** @var yii\web\View $this */

$this->title = 'Enterprise Rules';
?>
<div class="site-index">
    <div style="text-align: center;">
        <img src="<?= Yii::getAlias('@web/img/logo2.png') ?>" alt="Enterprise Rules" style="height: 70px;">
        <h3 style="text-align: center;">Приложение для хранения и просмотра инструкций предприятия</h3>
    </div>

    <h2 style="text-align: center;">Последние правила</h2>

    <?php if (Yii::$app->user->isGuest): ?>
        <div style="text-align: center; margin: 30px 0;">
            <p style="color: #666; font-size: 18px; margin-bottom: 20px;">
                Авторизуйтесь, чтобы увидеть список правил
            </p>
            <a href="<?= Url::to(['site/login']); ?>" 
               style="
                    text-decoration: none;
                    display: inline-block;
                    background-color: #148a8a;
                    padding: 10px 30px;
                    text-align: center;
                    border-radius: 5px;
                    color: #f5fafa;
                    font-weight: bold;
                    font-size: 16px;
                    transition: background-color 0.3s ease;">
                Войти
            </a>
        </div>
    <?php else: ?>
        <table class="table table-custom" style="border-radius:10px;border:3px solid #148a8a; margin: 0 auto;">
            <thead>
                <tr>
                    <th style="background-color: #f0f8f8; color: #053333;">Название</th>
                    <th style="background-color: #f0f8f8; color: #053333;">Описание</th>
                    <th style="background-color: #f0f8f8; color: #053333;">Действия</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($latestRules as $rule): ?>
                    <tr>
                        <td><?= Html::encode($rule->title) ?></td>
                        <td><?= StringHelper::truncateWords($rule->description, 20, '...') ?></td>
                        <td>
                            <a href="<?= Url::to(['site/more', 'id' => $rule->id]); ?>" 
                               style="text-decoration:none; display: inline-block;">
                                <div style="
                                    background-color:#148a8a;
                                    padding:5px;
                                    width:100px;
                                    text-align:center;
                                    border-radius:5px;
                                    vertical-align:center;
                                    color:#f5fafa;
                                    transition: background-color 0.3s ease;">
                                    Подробнее
                                    <?= Html::img('@web/img/arrow.png', ['alt' => 'arrow','style'=>'width:15px;margin-bottom:3px;']) ?>
                                </div>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div style="text-align: center; margin-top: 20px;">
            <a href="<?= Url::to(['site/about']); ?>" 
               style="
                    text-decoration: none;
                    display: inline-block;
                    background-color: #053333;
                    padding: 8px 25px;
                    text-align: center;
                    border-radius: 5px;
                    color: #f5fafa;
                    font-size: 14px;">
                Все правила
            </a>
        </div>
    <?php endif; ?>
</div>

<style>
    a:hover div {
        background-color: #0d6d6d !important;
    }
    .table-custom {
        width: 90%;
        max-width: 1200px;
    }
    .table-custom th, 
    .table-custom td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #e0f0f0;
    } 
    .table-custom tbody tr:hover {
        background-color: #f5fdfd;
    }
    
    .table-custom tbody tr:last-child td {
        border-bottom: none;
    }
</style>