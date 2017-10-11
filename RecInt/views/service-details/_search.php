<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ServiceDetailsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="service-details-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'employee_id') ?>

    <?= $form->field($model, 'services_ID') ?>

    <?= $form->field($model, 'rooms_id') ?>

    <?= $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'time_started') ?>

    <?php // echo $form->field($model, 'time_ended') ?>

    <?php // echo $form->field($model, 'booking_type') ?>

    <?php // echo $form->field($model, 'service_booking_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
