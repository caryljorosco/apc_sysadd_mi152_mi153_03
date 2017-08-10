<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<html>
<head>
<style>
body{


}</style>
</head>
<body>
<br>
<br>
<h1>Trivia</h1>
<ul>
<?php foreach ($trivia as $trivias): ?>
    <li>
        <?= Html::encode("{$trivias->trivia}") ?>:
        <h5>Answer: </h5>
        <strong><?= Html::encode("({$trivias->answer})") ?>: </strong>
    </li>
    <br>
<?php endforeach; ?>
</ul>
</body>

