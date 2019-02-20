<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Direccion */

$this->title = 'Crear Dirección';
$this->params['breadcrumbs'][] = ['label' => 'Direcciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="direccion-create">

    <!--<h1><?= Html::encode($this->title) ?></h1>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
