<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

$form = ActiveForm::begin(); ?>

<?= $form->field($model, 'category_id')->hiddenInput(['value' => $selectedCategoryId])->label(false) ?>

<?= $form->field($model, 'address')->textInput() ?>

<?= $form->field($model, 'date')->input('date') ?>

<?= $form->field($model, 'payment_id')->dropDownList($payments, ['prompt' => 'Выберите способ оплаты']) ?>

<!-- Выбор товара -->
<?= $form->field($model, 'product_id')->dropDownList($products, ['prompt' => 'Выберите товар']) ?>

<!-- Поле для пожеланий -->
<?= $form->field($model, 'wishes')->checkbox()->label('Пожелания по заказу') ?>

<div id="additional-info" style="display:none;">
    <?= $form->field($model, 'additional')->textarea() ?>
</div>

<?php
// Тут без JS, а значит, если нужно, чтобы поле появлялось при отметке чекбокса,
// то придется делать отдельную страницу или с помощью скрытых/показанных полей и возвратов.
// Вариант проще — оставить поле всегда видимым или добавлять его при следующем шаге.

?>

<div class="form-group">
    <?= Html::submitButton('Создать заявку', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>

<?php endif; ?>
<!-- views/application/create.php, если категория выбрана -->
<?php if (isset($selectedCategoryId)): ?>

<?php
// получаем список товаров этой категории
$products = \yii\helpers\ArrayHelper::map(
    \app\models\Product::find()->where(['category_id' => $selectedCategoryId])->all(),
    'id', 'name'
);
?>