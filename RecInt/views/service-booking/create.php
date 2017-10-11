<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ServiceBooking */

$this->title = 'Create Service Booking';
$this->params['breadcrumbs'][] = ['label' => 'Service Bookings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="service-booking-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
