<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ServiceDetailsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Service Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="service-details-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Service Details', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          
            'employee_id',
            'services_ID',
            'rooms_id',
            'date',
            'time_started',
            'time_ended',
            'booking_type',
            'service_booking_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
