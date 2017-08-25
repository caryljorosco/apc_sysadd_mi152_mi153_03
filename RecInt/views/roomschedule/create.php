<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Roomschedule */

$this->title = 'Create Roomschedule';
$this->params['breadcrumbs'][] = ['label' => 'Roomschedules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="roomschedule-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
