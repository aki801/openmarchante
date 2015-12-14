<?php

/* @var $this yii\web\View */

use yii\helpers\Html;/*importa modulos de html*/

$this->title = 'Acerca de';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
       Class aptent taciti sociosqu ad litora torquent per 
       conubia nostra, per inceptos himenaeos. Sed nec libero 
       ut metus auctor viverra. In ut consectetur massa, sed 
       hendrerit enim. Curabitur vel enim arcu. Duis egestas urna 
       ut dolor imperdiet vestibulum. Quisque quis tempor felis. 
       Suspendisse sit amet aliquam justo, eu egestas enim. Mauris 
       eu velit venenatis, ultrices purus eu, pulvinar risus. Donec 
       fermentum diam justo, nec accumsan felis maximus sed. Sed sapien eros, 
       fringilla at finibus quis, sodales in erat. Donec a ligula et elit ultricies 
       tincidunt ullamcorper dignissim erat. Aenean sollicitudin magna a mauris fermentum, 
       sit amet scelerisque turpis malesuada. Quisque volutpat commodo libero, vitae rutrum velit lobortis id.
    </p>

    <code><?= __FILE__ ?></code>
</div>
