<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ServiceDetails */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Service Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="service-details-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'employee_id' => $model->employee_id, 'services_ID' => $model->services_ID, 'rooms_id' => $model->rooms_id, 'service_booking_id' => $model->service_booking_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'employee_id' => $model->employee_id, 'services_ID' => $model->services_ID, 'rooms_id' => $model->rooms_id, 'service_booking_id' => $model->service_booking_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'employee_id',
            'services_ID',
            'rooms_id',
            'date',
            'time_started',
            'time_ended',
            'booking_type',
            'service_booking_id',
        ],
    ]) ?>

</div>
