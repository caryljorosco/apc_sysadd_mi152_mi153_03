<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BookingDetailsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="booking-details-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'Booking_ID') ?>

    <?= $form->field($model, 'Employee_ID') ?>

    <?= $form->field($model, 'Services_ID') ?>

    <?= $form->field($model, 'RoomSchedule_ID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
