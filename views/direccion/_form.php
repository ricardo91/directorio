<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Direccion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="direccion-form">

    <div class="panel panel-primary">
    <div class="panel-heading"><strong><?= Html::encode($this->title) ?></strong></div>
    <div class="panel-body">

	    <?php $form = ActiveForm::begin(); ?>

	    <?= $form->field($model, 'direccion')->textInput(['maxlength' => true, 'placeHolder' => 'Ingresa la Dirección']) ?>

	    <div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>

	    <?php ActiveForm::end(); ?>

		</div>
	</div>	 
</div>

