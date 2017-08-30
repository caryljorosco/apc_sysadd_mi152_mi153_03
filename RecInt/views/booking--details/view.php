<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Booking_Details */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Booking  Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking--details-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'Booking_id' => $model->Booking_id, 'employee_id' => $model->employee_id, 'services_ID' => $model->services_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'Booking_id' => $model->Booking_id, 'employee_id' => $model->employee_id, 'services_ID' => $model->services_ID], [
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
            'Booking_id',
            'employee_id',
            'services_ID',
        ],
    ]) ?>

</div>
