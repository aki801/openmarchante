<?php

/* @var $this yii\web\View */

use yii\helpers\Html;/*importa modulos de html*/
use yii\widgets\LinkPager;

$this->title = 'Lista de deseos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-deseos">
    <h1><?= Html::encode($this->title) ?></h1>
   

	<div class="panel panel-success" > <!--panel color verde-->
			  <div class="panel-heading">
			    <h3 class="panel-title">Ingresa tu información</h3>
			  </div>
		 <div class="panel-body row">
		    <!--Panel content-->

		<!--	<ul>
			<?php /*foreach ($countries as $country): ?>
			    <li>
			        <?= Html::encode("{$country->name} ({$country->code})") ?>:
			        <?= $country->population ?>
			    </li>
			<?php endforeach; ?>
			</ul>

			<?= LinkPager::widget(['pagination' => $pagination]) ?> *///-->//
		?>
		</div>

</div>
    
    

    <code><?= __FILE__ ?></code>
</div>
