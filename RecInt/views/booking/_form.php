<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\time\TimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Booking */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="booking-form">

    <?php $form = ActiveForm::begin(); ?>

	
	<?= $form->field($model, 'Booking_Type')->radio(['label' => 'Walk In', 'value' => 'Walk In', 'uncheck' => null]) ?>
	<?= $form->field($model, 'Booking_Type')->radio(['label' => 'Hotel Guest', 'value' => 'Guest', 'uncheck' => null]) ?>
    
	<?= $form->field($model, 'time_start')->widget(\kartik\time\TimePicker::classname())?>
	<?= $form->field($model, 'time_end')->widget(\kartik\time\TimePicker::classname())?>
	
	<?= $form->field($model, 'date_received')->widget(\kartik\date\DatePicker::classname(),[
    'pluginOptions' => [
        'autoclose'=>true,
		'format' => 'yyyy-mm-dd'
    ]
])?>

    <?= $form->field($model, 'duration')->dropDownList(['a' => '01:00:00', 'b' => '01:30:00', 'c' => '02:00:00']); ?>

    <?= $form->field($model, 'Rooms_ID')->textInput() ?>

    <?= $form->field($model, 'Customer_ID')->textInput() ?>

    <?= $form->field($model, 'Employee_ID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
