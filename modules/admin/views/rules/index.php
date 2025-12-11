<?php
use app\models\Rules;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

$this->title = 'Правила';
?>

<div class="rules-index" style="background-color:#f5fafa; padding:20px; border-radius:8px;min-height:700px;">

    <h1 style="color:#053333; margin-bottom: 20px;"><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить правило', ['create'], [
            'class' => 'btn',
            'style' => 'background-color:#148a8a; color:#f5fafa; border:none; border-radius:5px; padding:8px 15px;',
        ]) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'category_id',
                'label' => 'Категория',
                'value' => function ($model) {
                    return $model->category ? $model->category->name : '-';
                },
                'contentOptions' => ['style' => 'vertical-align: middle;'],
            ],
            [
                'attribute' => 'title',
                'label' => 'Заголовок',
                'contentOptions' => ['style' => 'vertical-align: middle;'],
            ],
            [
                'attribute' => 'description',
                'label' => 'Описание',
                'format' => 'ntext',
                'contentOptions' => ['style' => 'vertical-align: middle; white-space: normal; max-width: 400px;'],
            ],
            [
                'attribute' => 'created_at',
                'label' => 'Дата создания',
                'contentOptions' => ['style' => 'vertical-align: middle;'],
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Rules $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                },
                'contentOptions' => ['style' => 'vertical-align: middle; text-align:center;'],
                'headerOptions' => ['style' => 'text-align:center;'],
            ],
        ],
    ]); ?>
</div>