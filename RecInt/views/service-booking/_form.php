<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ServiceBooking */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="service-booking-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bookingType')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'timeReceived')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'roomID')->textInput() ?>

    <?= $form->field($model, 'cusID')->textInput() ?>

    <?= $form->field($model, 'empID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
