<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\time\TimePicker;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;
use app\models\Employee;
use app\models\Services;
use app\models\Rooms;
use app\models\Customer;
/* @var $this yii\web\View */
/* @var $model app\models\ServiceDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="service-details-form">

    <?php $form = ActiveForm::begin(); ?>

   

    
	<?= $form->field($model, 'employee_id')->dropDownList(
	ArrayHelper::map(Employee::find()->asArray()->all(), 'ID',function($model, $defaultValue){
			return $model['First_Name'].' '.$model['Last_Name'];}
			,'Position')
		)?>

	<?= $form->field($model, 'services_ID')->dropDownList(
	ArrayHelper::map(Services::find()->all(),'ID','Service_Name','Price'))?>
	
	<?= $form->field($model, 'rooms_id')->dropDownList(
	ArrayHelper::map(Rooms::find()->all(),'ID','Room_Number'))?>
	
    <?= $form->field($model, 'date')->widget(\kartik\date\DatePicker::classname(),[
    'pluginOptions' => [
        'autoclose'=>true,
		'format' => 'yyyy-mm-dd',
		'defaultDate' => 'current'
		]
	])?>

	<?= $form->field($model, 'time_started')->widget(\kartik\time\TimePicker::classname(),[
	'pluginOptions' => [
		'showMeridian' => false,
		'defaultTime' => 'current',
		'showSeconds' => true
		]
	])?>
    
	<?= $form->field($model, 'time_ended')->widget(\kartik\time\TimePicker::classname(),[
	'pluginOptions' => [
		'showMeridian' => false,
		'defaultTime' => 'current',
		'showSeconds' => true
		]
	])?>
    
	<?= $form->field($model, 'booking_type')->radioList([
	'1' => 'Walk In',
	'2' => 'Hotel Guest']) ?>
	
	<?= $form->field($model, 'service_booking_id')->dropDownList(
	ArrayHelper::map(Customer::find()->asArray()->all(), 'ID',function($model, $defaultValue){
			return $model['First_Name'].' '.$model['Last_Name'];}
			,'Position')
		)?>
		
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
