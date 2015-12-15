<?php

/* @var $this yii\web\View */

use yii\helpers\Html;/*importa modulos de html*/

$this->title = 'Refacciones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-refacciones">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="container"> 	
		
    
    	<div class="panel panel-success"> <!--panel color verde-->
			  <div class="panel-heading">
			    <h3 class="panel-title">Catalogo de Refacciones</h3>
			  </div>
			  <div class="panel-body row">
			    <!--Panel content-->

			   <div class="media-left" ><!--img con texto lateral izq!-->
			    <a href="#">
			      <img class="media-object" class="img-responsive"class="img-thumbnail"src="img/productos/refacciones/01.jpg" alt="...">
			    </a>
			  </div>

			   <div class="media-body">
			    <h4 class="media-heading">Cadena para bicicleta de montaña</h4><hr>
			    	<p> Donec ut varius mi. Curabitur
			    	  placerat blandit viverra. </p>
			  </div><!--fin cajita texto lateral izq-->

			  <div class="media-left" ><!--img con texto lateral izq!-->
			    <a href="#">
			      <img class="media-object" class="img-responsive"class="img-thumbnail"src="img/productos/refacciones/02.jpg" alt="...">
			    </a>
			  </div>

			   <div class="media-body">
			    <h4 class="media-heading">Cadenar</h4><hr>
			    	<p>  Vestibulum turpis ex, iaculis vel lacinia pulvinar, vestibulum ut dolor.
			    	   Cras et dictum arcu, eu ornare enim. </p>
			  </div><!--fin cajita texto lateral izq-->


			    
			    
			  </div>
		</div>
	</div>
    <code><?= __FILE__ ?></code>
</div>
