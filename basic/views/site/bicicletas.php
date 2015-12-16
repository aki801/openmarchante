<?php

/* @var $this yii\web\View */

use yii\helpers\Html;/*importa modulos de html*/

$this->title = 'Bicicletas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-bicicletas">
    <h1><?= Html::encode($this->title) ?></h1>

     	<!--<div class="jumbotron" >
		  <img src="img/productos/bicicletas/d-2.jpg " alt="bici1" class="img-responsive">
		 </div>-->
     <div class="container">    
        
    
        <div class="panel panel-success"> <!--panel color verde-->
              <div class="panel-heading">
                <h3 class="panel-title">Catalogo de bicicletas</h3>
              </div>
              <div class="panel-body row">
                <!--Panel content-->

		 <div class="row" class="col-md-5"id="ofertas">
		 <aside class="col-md-5"> <!--Producto.-->
                        <a href="#"><img src="img/productos/bicicletas/d-2.jpg " alt="bici1" class="img-responsive"></a>
                        <a href="#"><h4>Bicicleta azul</h4></a><hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat.</p>
                        <p><strong>$160.00 </strong></p>
                        <div class="reset"></div>
                        <div class="barinf">
                            <a href="#"><i class="fa fa-shopping-basket"></i> <strong>Añadir </strong></a> 
                            <a href="#"><i class="fa fa-heart"></i></a>
                            
                        </div>
            </aside>
            <aside class="col-md-5" > <!--Producto.-->
                        <a href="#"><img src="img/productos/bicicletas/d-5.jpg " alt="bici1"class="img-responsive"></a>
                        <a href="#"><h4>Bicicleta</h4></a><hr>
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
                        <a href="#"><img src="img/productos/bicicletas/d-1.jpg " alt="bici1"class="img-responsive"></a>
                        <a href="#"><h4>Bicicleta</h4></a><hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat.</p>
                        <p><strong>$1 600.00 kg</strong></p>
                        <div class="reset"></div>
                        <div class="barinf">
                            <a href="#"><i class="fa fa-shopping-basket"></i> <strong>Añadir </strong></a> 
                            <a href="#"><i class="fa fa-heart"></i></a>
                            
                        </div>
            </aside>
            <aside class="col-md-5" > <!--Producto.-->
                        <a href="#"><img src="img/productos/bicicletas/d-3.jpg " alt="bici3"class="img-responsive"></a>
                        <a href="#"><h4>Bicicleta</h4></a><hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat.</p>
                        <p><strong>$16 000.00 kg</strong></p>
                        <div class="reset"></div>
                        <div class="barinf">
                            <a href="#"><i class="fa fa-shopping-basket"></i> <strong>Añadir </strong></a> 
                            <a href="#"><i class="fa fa-heart"></i></a>
                            
                        </div>
            </aside>
            <aside class="col-md-5" > <!--Producto.-->
                        <a href="#"><img src="img/productos/bicicletas/d-4.jpg " alt="bici4"class="img-responsive"></a>
                        <a href="#"><h4>Bicicleta</h4></a><hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat.</p>
                        <p><strong>$11 000.00 kg</strong></p>
                        <div class="reset"></div>
                        <div class="barinf">
                            <a href="#"><i class="fa fa-shopping-basket"></i> <strong>Añadir </strong></a> 
                            <a href="#"><i class="fa fa-heart"></i></a>
                            
                        </div>
            </aside>
            <aside class="col-md-5" > <!--Producto.-->
                        <a href="#"><img src="img/productos/bicicletas/d-6.jpg " alt="bici6"class="img-responsive"></a>
                        <a href="#"><h4>Bicicleta</h4></a><hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat.</p>
                        <p><strong>$60 000.00 kg</strong></p>
                        <div class="reset"></div>
                        <div class="barinf">
                            <a href="#"><i class="fa fa-shopping-basket"></i> <strong>Añadir </strong></a> 
                            <a href="#"><i class="fa fa-heart"></i></a>
                            
                        </div>
            </aside>

        </div><!--fin div ofertas--> 

                
        </div>
        </div><!--fin div panel--> 
    </div><!--fin div container--> 

    <code><?= __FILE__ ?></code>
</div>
