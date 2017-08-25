<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BookingDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="booking-details-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Booking_ID')->textInput() ?>

    <?= $form->field($model, 'Employee_ID')->textInput() ?>

    <?= $form->field($model, 'Services_ID')->textInput() ?>

    <?= $form->field($model, 'RoomSchedule_ID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
