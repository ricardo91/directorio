<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ContactosDos */

$this->title = 'Crear Contacto DOS';
$this->params['breadcrumbs'][] = ['label' => 'Contactos DOS', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contactos-dos-create">

    <!--<h1><?= Html::encode($this->title) ?></h1>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
