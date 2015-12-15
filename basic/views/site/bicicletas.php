<?php

/* @var $this yii\web\View */

use yii\helpers\Html;/*importa modulos de html*/

$this->title = 'Bicicletas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-bicicletas">
    <h1><?= Html::encode($this->title) ?></h1>

     	<div class="jumbotron" >
		  <img src="img/productos/bicicletas/d-2.jpg " alt="bici1" class="img-responsive">
		 </div>
		 <div class="row" class="col-md-5"id="ofertas">
		 <aside class="col-md-5"> <!--Producto.-->
                        <a href="#"><img src="img/productos/bicicletas/d-2.jpg " alt="bici1" class="img-responsive"></a>
                        <a href="#"><h4>Bicicleta Verde</h4></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat.</p>
                        <p><strong>$160.00 kg</strong></p>
                        <div class="reset"></div>
                        <div class="barinf">
                            <a href="#"><i class="fa fa-shopping-basket"></i> <strong>Añadir </strong></a> 
                            <a href="#"><i class="fa fa-heart"></i></a>
                            
                        </div>
            </aside>
            <aside class="col-md-5" > <!--Producto.-->
                        <a href="#"><img src="img/productos/bicicletas/d-5.jpg " alt="bici1"class="img-responsive"></a>
                        <a href="#"><h4>Bicicleta</h4></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat.</p>
                        <p><strong>$160.00 kg</strong></p>
                        <div class="reset"></div>
                        <div class="barinf">
                            <a href="#"><i class="fa fa-shopping-basket"></i> <strong>Añadir </strong></a> 
                            <a href="#"><i class="fa fa-heart"></i></a>
                            
                        </div>
            </aside> 
            </div> 

    <code><?= __FILE__ ?></code>
</div>
