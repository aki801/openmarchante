<?php

/* @var $this yii\web\View */

use yii\helpers\Html;/*importa modulos de html*/

$this->title = 'Accesorios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-accesorios">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="container"> 	
		    
    	<div class="panel panel-success">
			  <div class="panel-heading">
			    <h3 class="panel-title">Accesorios</h3>
			  </div>
			  <div class="panel-body row">
			    <!--Panel content-->

			   <div class="media-left" ><!--img con texto lateral izq!-->
			    <a href="#">
			      <img class="media-object" class="img-responsive"class="img-thumbnail"src="img/productos/cascos/casco bicicleta oneall orbiter black oxs (1)-500x500.jpg" alt="...">
			    </a>
			  </div>

			   <div class="media-body">
			    <h4 class="media-heading">Guantes</h4><hr>
			    	<p> Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
			    	 Vivamus vel metus in lectus sagittis pharetra eget non tortor. Donec ut varius mi. Curabitur
			    	  placerat blandit viverra. </p>
			  </div><!--fin cajita texto lateral izq-->

			  <div class="media-left" ><!--img con texto lateral izq!-->
			    <a href="#">
			      <img class="media-object" class="img-responsive"class="img-thumbnail"src="img/productos/cascos/1043895_590776500962686_1260651036_n.jpg" alt="...">
			    </a>
			  </div>

			   <div class="media-body">
			    <h4 class="media-heading">Googles</h4> <hr>
			    	<p> Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
			    	 Vivamus vel metus in lectus sagittis pharetra eget non tortor. Donec ut varius mi. Curabitur
			    	  placerat blandit viverra. </p>
			  </div><!--fin cajita texto lateral izq-->


			    
			    
			  </div>
		</div>
	</div>
    <code><?= __FILE__ ?></code>
</div>
