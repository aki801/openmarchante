<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = $producto;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-detalle">
    <h1><?= Html::encode($this->title) ?></h1>

    <a href=""> <?= $producto->imagen ?> </a>
    <aside id="detalle">
        <h4><?= $producto->producto ?></h4>
        <p>Marca: <?= $producto->marca ?>/p>
        <p><?= $producto->descripcion ?></p>
        <p><?= $producto->precio ?></p>
        <p>Exxistencias: <?= $producto->piezas ?></p>
        <p>Tienda(s): <?= $producto->tienda ?></p>

        <div class="barinf">
            <a href="#"><i class="fa fa-shopping-basket"></i> </a>
            <a href="#"><i class="fa fa-heart"></i></a>

        </div>
    </aside> <!--Termina Detalle -->

<!--
**************************************************************************++
-->
