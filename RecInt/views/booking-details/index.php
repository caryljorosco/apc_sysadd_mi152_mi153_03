<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BookingDetailsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Booking Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-details-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Booking Details', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'Booking_ID',
            'Employee_ID',
            'Services_ID',
            'Rooms_ID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
