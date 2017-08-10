<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ServiceBookingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Service Bookings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="service-booking-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Service Booking', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'bookingID',
            'bookingType',
            'timeReceived',
            'roomID',
            'cusID',
            // 'empID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
