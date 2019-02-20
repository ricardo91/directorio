<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Telefono */

$this->title = 'Actualizar Teléfono: ' . ' ' . $model->numero;
$this->params['breadcrumbs'][] = ['label' => 'Teléfonos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->numero, 'url' => ['view', 'id' => $model->id_telefono]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="telefono-update">

    <!--<h1><?= Html::encode($this->title) ?></h1>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

