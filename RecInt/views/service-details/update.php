<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ServiceDetails */

$this->title = 'Update Service Details: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Service Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'employee_id' => $model->employee_id, 'services_ID' => $model->services_ID, 'rooms_id' => $model->rooms_id, 'service_booking_id' => $model->service_booking_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="service-details-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
