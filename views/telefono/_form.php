<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Direccion;
use app\models\Cargo;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Telefono */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="telefono-form">

    <div class="panel panel-primary">
        <div class="panel-heading"><strong><?= Html::encode($this->title) ?></strong></div>
        <div class="panel-body">

            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'numero')->textInput(['maxlength' => true, 'placeHolder' => 'Ingresa el Número']) ?>

            <?php
                $a= ['1' => 'Piso 1', '2' => 'Piso 2', '3' => 'Piso 3', '4' => 'Piso 4', '5' => 'Piso 5', '6' => 'Piso 6', '7' => 'Piso 7', '8' => 'Piso 8', '9' => 'Piso 9'];
                echo $form->field($model, 'piso')->dropDownList($a); //,['prompt'=>'Select Option']
            ?>

            <?= $form->field($model, 'direccion_id')->dropDownList(Arrayhelper::map(Direccion::find()->all(), 'id_direccion', 'direccion')) ?>

            <?= $form->field($model, 'cargo_id')->dropDownList(Arrayhelper::map(Cargo::find()->all(), 'id_cargo', 'cargo')) ?>

            <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true, 'placeHolder' => 'Ingresa la Descipción']) ?>

            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>   
</div>

