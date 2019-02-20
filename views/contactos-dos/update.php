<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ContactosDos */

$this->title = 'Actualizar Contacto DOS: ' . $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Contactos DOS', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nombre, 'url' => ['view', 'id' => $model->id_contactos_dos]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="contactos-dos-update">

    <!--<h1><?= Html::encode($this->title) ?></h1>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
