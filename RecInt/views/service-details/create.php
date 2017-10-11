<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ServiceDetails */

$this->title = 'Create Service Details';
$this->params['breadcrumbs'][] = ['label' => 'Service Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="service-details-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
