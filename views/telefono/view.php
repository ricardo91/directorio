<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Telefono */

$this->title = $model->numero;
$this->params['breadcrumbs'][] = ['label' => 'Teléfonos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="telefono-view">

    <!--<h1><?= Html::encode($this->title) ?></h1>-->

     <div class="panel panel-primary">
        <div class="panel-heading"><strong><?= Html::encode($this->title) ?></strong></div>
        <div class="panel-body">

            <p>
                <?= Html::a('Actualizar', ['update', 'id' => $model->id_telefono], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Eliminar', ['delete', 'id' => $model->id_telefono], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => '¿Está seguro que desea eliminar este teléfono?',
                        'method' => 'post',
                    ],
                ]) ?>
            </p>

            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id_telefono',
                    'numero',
                    'piso',
                    'direccion_id',
                    'cargo_id',
                    'descripcion',
                ],
            ]) ?>

        </div>
    </div>   
</div>

