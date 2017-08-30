<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Booking_Details */

$this->title = 'Update Booking  Details: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Booking  Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'Booking_id' => $model->Booking_id, 'employee_id' => $model->employee_id, 'services_ID' => $model->services_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="booking--details-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
