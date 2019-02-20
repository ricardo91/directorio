<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ContactosDos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contactos-dos-form">

    <div class="panel panel-primary">
        <div class="panel-heading"><strong><?= Html::encode($this->title) ?></strong></div>
        <div class="panel-body">

            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'nombre')->textInput(['maxlength' => true])->label('Nombre *') ?>

            <?= $form->field($model, 'numero')->textInput()->label('Número 1 *') ?>

            <?= $form->field($model, 'numero_2')->textInput() ?>

            <?= $form->field($model, 'numero_3')->textInput() ?>

            <?= $form->field($model, 'correo')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'empresa')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>   
</div>
