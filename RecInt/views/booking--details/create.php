<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Booking_Details */

$this->title = 'Create Booking  Details';
$this->params['breadcrumbs'][] = ['label' => 'Booking  Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking--details-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
