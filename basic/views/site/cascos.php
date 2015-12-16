<?php

/* @var $this yii\web\View */

use yii\helpers\Html;/*importa modulos de html*/

$this->title = 'Cascos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-cascos">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="container"> 	
		    
    	<div class="panel panel-success">
			  <div class="panel-heading">
			    <h3 class="panel-title">Catálogo de cascos</h3>
			  </div>
			  <div class="panel-body row" id="ofertas">
			    <!--Panel content-->
			<aside class="col-md-5"> <!--Producto.-->
			   <div class="media-left" ><!--img con texto lateral izq!-->
			    <a href="#">
			      <img class="media-object" class="img-responsive"class="img-thumbnail"src="img/productos/cascos/01.jpg" alt="...">
			    </a>
			  </div>

			   <div class="media-body">
			    <h4 class="media-heading">Casco turquesa</h4><hr>
			    	<p> Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
			    	 Vivamus vel metus in lectus sagittis pharetra eget non tortor. Donec ut varius mi. Curabitur
			    	  placerat blandit viverra. </p>
			  </div><!--fin cajita texto lateral izq-->
			  <p><strong> Modelo No. 12354</strong></p>
                        <div class="reset"></div>
                        <div class="barinf">
                            <a href="#"><i class="fa fa-shopping-basket"></i> <strong>Añadir </strong></a> 
                            <a href="#"><i class="fa fa-heart"></i></a>
                            
                        </div>
			</aside>


			<aside class="col-md-5"> <!--Producto.-->
			  <div class="media-left" ><!--img con texto lateral izq!-->
			    <a href="#">
			      <img class="media-object" class="img-responsive"class="img-thumbnail"src="img/productos/cascos/02.jpg" alt="...">
			    </a>
			  </div>

			   <div class="media-body">
			    <h4 class="media-heading">Casco deportivo</h4> <hr>
			    	<p> Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
			    	 Vivamus vel metus in lectus sagittis pharetra eget non tortor, per conubia nostra, per inceptos himenaeos.</p>
			  </div><!--fin cajita texto lateral izq-->
			  <p><strong> Modelo No. 125554</strong></p>
                        <div class="reset"></div>
                        <div class="barinf">
                            <a href="#"><i class="fa fa-shopping-basket"></i> <strong>Añadir </strong></a> 
                            <a href="#"><i class="fa fa-heart"></i></a>
			  </aside>


			  <aside class="col-md-5"> <!--Producto.-->
			  <div class="media-left" ><!--img con texto lateral izq!-->
			    <a href="#">
			      <img class="media-object" class="img-responsive"class="img-thumbnail"src="img/productos/cascos/03.jpg" alt="...">
			    </a>
			  </div>

			   <div class="media-body">
			    <h4 class="media-heading">Casco</h4> <hr>
			    	<p>  Donec ut varius mi. Curabiturper conubia nostra, per inceptos himenaeos, per conubia nostra, per inceptos himenaeos.
			    	  placerat blandit viverra. </p>
			  </div><!--fin cajita texto lateral izq-->
			  <p><strong> Modelo No. 124644</strong></p>
                        <div class="reset"></div>
                        <div class="barinf">
                            <a href="#"><i class="fa fa-shopping-basket"></i> <strong>Añadir </strong></a> 
                            <a href="#"><i class="fa fa-heart"></i></a>
			</aside>

			    
			    
			  </div>
		</div>
	</div>
    <code><?= __FILE__ ?></code>
</div>
