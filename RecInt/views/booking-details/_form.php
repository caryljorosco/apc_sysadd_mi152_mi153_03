<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Employee;
use app\models\Services;
use app\models\Rooms;

/* @var $this yii\web\View */
/* @var $model app\models\BookingDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="booking-details-form">
	
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Booking_ID')->textInput() ?>

	<?= $form->field($model, 'Employee_ID')->dropDownList(
	ArrayHelper::map(Employee::find()->asArray()->all(), 'ID',function($model, $defaultValue){
			return $model['First_Name'].' '.$model['Last_Name'];}
			,'Position')
		)?>

	<?= $form->field($model, 'Services_ID')->dropDownList(
	ArrayHelper::map(Services::find()->all(),'ID','Service_Name','Price'))?>
	
	<?= $form->field($model, 'Rooms_ID')->dropDownList(
	ArrayHelper::map(Rooms::find()->all(),'ID','Room_Number'))?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
