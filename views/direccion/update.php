<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Direccion */

$this->title = 'Actualizar Dirección: ' . ' ' . $model->direccion;
$this->params['breadcrumbs'][] = ['label' => 'Direcciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->direccion, 'url' => ['view', 'id' => $model->id_direccion]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="direccion-update">

    <!--<h1><?= Html::encode($this->title) ?></h1>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
