<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Booking */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="booking-form">

    <?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'Booking_Type')->dropDownList(['a' => 'Online', 'b' => 'Walk In', 'c' => 'Hotel Guest']); ?>
	
    <?= $form->field($model, 'time_start')->textInput() ?>

    <?= $form->field($model, 'time_end')->textInput() ?>

    <?= $form->field($model, 'date_received')->textInput() ?>

    <?= $form->field($model, 'duration')->dropDownList(['a' => '01:00:00', 'b' => '01:30:00', 'c' => '02:00:00']); ?>

    <?= $form->field($model, 'Rooms_ID')->textInput() ?>

    <?= $form->field($model, 'Customer_ID')->textInput() ?>

    <?= $form->field($model, 'Employee_ID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
