<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\time\TimePicker;
use yii\helpers\ArrayHelper;
use app\models\Employee;
use app\models\Services;
use app\models\Rooms;
use app\models\Customer;

/* @var $this yii\web\View */
/* @var $model app\models\Booking */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="booking-form">

    <?php $form = ActiveForm::begin(); ?>

	
	<?= $form->field($model, 'Booking_Type')->radioList([
	'1' => 'Walk In',
	'2' => 'Hotel Guest']) ?>
 
    
	<?= $form->field($model, 'time_start')->widget(\kartik\time\TimePicker::classname(),[
	'pluginOptions' => [
		'showMeridian' => false,
		'defaultTime' => 'current',
		'showSeconds' => true
		]
	])?>
	
	<?= $form->field($model, 'time_end')->widget(\kartik\time\TimePicker::classname(),[
	'pluginOptions' => [
		'showMeridian' => false,
		'showSeconds' => true
		]
	])?>
	<?= $form->field($model, 'date_received')->widget(\kartik\date\DatePicker::classname(),[
    'pluginOptions' => [
        'autoclose'=>true,
		'format' => 'yyyy-mm-dd'
		]
	])?>

    <?= $form->field($model, 'duration')->widget(\kartik\time\TimePicker::classname(),[
	'pluginOptions' => [
		'showMeridian' => false,
		'defaultTime' => '01:00'
		]
	])?>
	<?= $form->field($model, 'Rooms_ID')->dropDownList(
	ArrayHelper::map(Rooms::find()->all(),'ID','Room_Number'))?>
	
	<?= $form->field($model, 'Customer_ID')->dropDownList(
	ArrayHelper::map(Customer::find()->asArray()->all(), 'ID',function($model, $defaultValue){
			return $model['First_Name'].' '.$model['Last_Name'];}
			,'Position')
		)?>
		
	<?= $form->field($model, 'Employee_ID')->dropDownList(
	ArrayHelper::map(Employee::find()->asArray()->all(), 'ID',function($model, $defaultValue){
			return $model['First_Name'].' '.$model['Last_Name'];}
			,'Position')
		)?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
