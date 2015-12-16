<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Nuevo Registro';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-registro">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="panel panel-success" id="panel"> <!--panel color verde-->
			  <div class="panel-heading">
			    <h3 class="panel-title">Ingresa tu información</h3>
			  </div>
			  <div class="panel-body row" id="ofertas">
		    <!--Panel content-->
			   
			<aside class="col-md-5"> <!--formulario.-->
				<?php $form = ActiveForm::begin(); ?>

				    <?= $form->field($model, 'name') ?>
				    <?= $form->field($model, 'nacionalidad') ?>
				    <?= $form->field($model, 'email') ?>
				    <?= $form->field($model, 'direccion') ?>
				    


				    <div class="form-group">
				        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
				    </div>

				<?php ActiveForm::end(); ?>
			</aside>
			</div>
		</div>

</div>