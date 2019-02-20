<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ContactosDos */

$this->title = $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Contactos DOS', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contactos-dos-view">

    <!--<h1><?= Html::encode($this->title) ?></h1>-->

     <div class="panel panel-primary">
        <div class="panel-heading"><strong><?= Html::encode($this->title) ?></strong></div>
        <div class="panel-body">

            <p>
                <?= Html::a('Actualizar', ['update', 'id' => $model->id_contactos_dos], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Eliminar', ['delete', 'id' => $model->id_contactos_dos], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => '¿Está seguro que desea eliminar este elemento?',
                        'method' => 'post',
                    ],
                ]) ?>
            </p>

            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id_contactos_dos',
                    'numero',
                    'numero_2',
                    'numero_3',
                    'nombre',
                    'correo',
                    'empresa',
                    'descripcion',
                ],
            ]) ?>

        </div>
    </div>   
</div>
