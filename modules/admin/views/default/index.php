<?php 
use yii\helpers\Url;
use yii\helpers\Html;
?>

<div class="admin-default-index">
    <h1 style=" color:#053333; font-weight:600; margin-bottom:20px;">Вы авторизовались как администратор</h1>
    <div class="card" style="width: auto;">
  <div class="card-body" style="
    background-color:#148a8a;
    color:#f5fafa;">
    <h2 class="card-title">Правила</h2>
    <p class="card-text">Страница просмотра, редактирования и добавления правил компании.</p>
    <div style="
    background-color:#f5fafa;
    padding:5px;width:100px;text-align:center;
    border-radius:5px;
    vertical-align:center;">
        <a href="<?= $url = Url::to(['/admin/rules']); ?>" style="text-decoration:none;color:#148a8a;">Перейти</a>
        <?= Html::img('@web/img/arrow2.png', ['alt' => 'arrow','style'=>'width:15px;margin-bottom:3px;']) ?>
        
    </div>
  </div>
</div>

<div style="display:flex;flex-direction:row;gap:30px;margin-top:50px;display: flex; justify-content: center;">

  <div class="card" style="width: 50%;">
    <div class="card-body" style="border:2px solid #148a8a;border-radius:5px;">
      <h5 class="card-title">Пользователи</h5>
      <p class="card-text">Страница просмотра и редактирования списка пользователей сервиса.</p>
          <div style="
    background-color:#148a8a;
    padding:5px;width:100px;text-align:center;
    border-radius:5px;
    vertical-align:center;">
        <a href="<?= $url = Url::to(['/admin/user']); ?>" style="text-decoration:none;color:#f5fafa;">Перейти</a>
        <?= Html::img('@web/img/arrow.png', ['alt' => 'arrow','style'=>'width:15px;margin-bottom:3px;']) ?>
        
    </div>
    </div>
  </div>


  <div class="card" style="width: 50%;">
    <div class="card-body" style="border:2px solid #148a8a;border-radius:5px;">
      <h5 class="card-title">Категории</h5>
      <p class="card-text">Страница просмотра, редактирования и добавления новых категорий правил.</p>
          <div style="
    background-color:#148a8a;
    padding:5px;width:100px;text-align:center;
    border-radius:5px;
    vertical-align:center;">
        <a href="<?= $url = Url::to(['/admin/categories']); ?>" style="text-decoration:none;color:#f5fafa;">Перейти</a>
        <?= Html::img('@web/img/arrow.png', ['alt' => 'arrow','style'=>'width:15px;margin-bottom:3px;']) ?>
        
    </div>
    </div>
  </div>
</div>

</div>
