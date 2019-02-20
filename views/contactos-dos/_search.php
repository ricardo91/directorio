<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ContactosDosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contactos-dos-search">

     <div class="container-fluid">
        <div class="row">
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
            </div>    
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

                <?php $form = ActiveForm::begin([
                    'action' => ['index'],
                    'method' => 'get',

                    //'layout' => 'horizontal',
                    'fieldConfig' => [
                        'template' => "{input}",     // "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
                        /*'horizontalCssClasses' => [
                            'label' => 'col-sm-4',
                            'offset' => 'col-sm-offset-4',
                            'wrapper' => 'col-sm-8',
                            'error' => '',
                            'hint' => '',
                        ],*/
                    ],
                ]); ?>

                <!--<?= $form->field($model, 'id_contactos_dos') ?>-->

                <!--<?= $form->field($model, 'numero') ?>-->

                <!--<?= $form->field($model, 'nombre') ?>-->

                <!--<?= $form->field($model, 'correo') ?>-->

                <!--<?= $form->field($model, 'empresa') ?>-->

                <?php // echo $form->field($model, 'descripcion') ?>

                <div class="input-group">
                    <?= $form->field($model, 'globalSearch')->textInput(['placeHolder' => 'Buscar por...']) ?>
                    <span class="input-group-btn">
                        <?= Html::submitButton('Buscar', ['class' => 'btn btn-default']) ?>
                    </span>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div> 
</div>
