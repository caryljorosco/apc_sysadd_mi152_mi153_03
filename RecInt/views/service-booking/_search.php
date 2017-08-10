<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ServiceBookingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="service-booking-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'bookingID') ?>

    <?= $form->field($model, 'bookingType') ?>

    <?= $form->field($model, 'timeReceived') ?>

    <?= $form->field($model, 'roomID') ?>

    <?= $form->field($model, 'cusID') ?>

    <?php // echo $form->field($model, 'empID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
