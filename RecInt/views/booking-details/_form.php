<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Employee;
use app\models\Services;
use app\models\Rooms;
use app\models\BookingDetails;
use app\models\Customer;
use app\models\Booking;

/* @var $this yii\web\View */
/* @var $model app\models\BookingDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="booking-details-form">
	
    <?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'Booking_ID')->dropDownList(
		ArrayHelper::map(Booking::find()->joinWith('customer')->all(), 
		'ID','customer.Last_Name','Booking_Type'))?>
			
	<?= $form->field($model, 'Employee_ID')->dropDownList(
	ArrayHelper::map(Employee::find()->asArray()->all(), 'ID',function($model, $defaultValue){
			return $model['First_Name'].' '.$model['Last_Name'];}
			,'Position')
		)?>

	<?= $form->field($model, 'Services_ID')->dropDownList(
	ArrayHelper::map(Services::find()->all(),'ID','Service_Name','Price'))?>
	
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
