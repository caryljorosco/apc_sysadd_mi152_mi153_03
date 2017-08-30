<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Customer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Last_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'First_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Middle_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Contact_Number')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>