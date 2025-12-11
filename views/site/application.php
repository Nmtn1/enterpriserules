<?php
use yii\grid\GridView;

echo "<h1>Мои заявки</h1>";

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        'id',
        'title', 
        'status',
        'created_at:datetime',

    ],
]);
?>