<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use app\models\Test;
use kl83\widgets\RatingWidget;

?>

<h3>Dispay</h3>
<?= RatingWidget::widget([
    'name' => 'test',
    'readOnly' => true,
]) ?>
<?= RatingWidget::widget([
    'value' => 3.5,
]) ?>
<?= RatingWidget::widget([
    'name' => 'test',
    'value' => 4,
    'readOnly' => true,
]) ?>
<?= RatingWidget::widget([
    'name' => 'test',
    'value' => 5,
    'maxRating' => 10,
    'readOnly' => true,
]) ?>

<h3>Plain</h3>
<?= RatingWidget::widget([
    'name' => 'test',
]) ?>
<?= RatingWidget::widget([
    'name' => 'test',
    'value' => 4,
]) ?>
<?= RatingWidget::widget([
    'name' => 'test',
    'value' => 5,
    'maxRating' => 10,
]) ?>

<h3>Form</h3>
<?php
    $model = new Test;
    $model->load(Yii::$app->request->get());
    $form = ActiveForm::begin([ 'method' => 'get' ]);
    echo $form->field($model, 'rating')->widget('kl83\widgets\RatingWidget');
    echo Html::submitButton();
    ActiveForm::end();
