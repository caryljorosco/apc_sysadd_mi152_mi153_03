<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Services;
use app\models\Employee;
/* @var $this yii\web\View */
/* @var $model app\models\BookingDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="booking-details-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Booking_ID')->textInput() ?>
	
	<?= $form->field($model, 'Employee_ID')->dropDownList(
	ArrayHelper::map(Employee::find()->all(),'Employee_ID','First_Name', 'Last_Name'),
	['prompt'=>'Select Employee']
	) ?>
    
	<?= $form->field($model, 'Services_ID')->dropDownList(
	ArrayHelper::map(Services::find()->all(),'ID','Service_Name'),
	['prompt'=>'Select Services']
	) ?>
	
    <?= $form->field($model, 'RoomSchedule_ID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
