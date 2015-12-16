<?php
use yii\helpers\Html;
?>
<p>You have entered the following information:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Adress</label>: <?= Html::encode($model->direccion) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
    <li><label>Nacionality</label>: <?= Html::encode($model->nacionalidad) ?></li>
</ul>