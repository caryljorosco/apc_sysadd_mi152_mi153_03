<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ServiceBooking */

$this->title = 'Update Service Booking: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Service Bookings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'customer_id' => $model->customer_id, 'employee_id' => $model->employee_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="service-booking-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
