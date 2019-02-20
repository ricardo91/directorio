<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ContactosDosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contactos DOS';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contactos-dos-index">

    <!--<h1><?= Html::encode($this->title) ?></h1>-->
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>


<br xmlns="http://www.w3.org/1999/html"/>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><!--     col-md-offset-1-->

                <div class="panel panel-primary">
                    <div class="panel-heading"><strong><?= Html::encode($this->title) ?></strong></div>
                    <div class="panel-body">

                        <?= Html::a('<span class="glyphicon glyphicon-plus"></span> Crear Nuevo', ['create'], ['class' => 'btn btn-large btn-info']) ?>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                

                        <label>
                            Mostrar
                            <?php echo \nterms\pagesize\PageSize::widget();?>
                        </label>

                        <?php Pjax::begin(); ?>    <?= GridView::widget([
                                'dataProvider' => $dataProvider,
                                'filterModel' => $searchModel,
                                'filterSelector' => 'select[name="per-page"]',
                                'tableOptions' =>['class' => 'table table-striped table-hover table-bordered table-condensed'],
                                'layout' => '
                                    <div class="pull-right">
                                        {summary}
                                    </div>
                                    {items}
                                    <div class="pull-right">
                                        {pager}
                                    </div>
                                ',
                                'pager' => [
                                    //'class' => 'justinvoelker\separatedpager\CustomLinkPager',
                                    'maxButtonCount' => 10,
                                    'prevPageLabel' => 'Anterior',
                                    'nextPageLabel' => 'Siguiente',
                                    'prevPageCssClass' => 'prev hidden-xs',
                                    'nextPageCssClass' => 'next hidden-xs',
                                ],
                                'columns' => [
                                    ['class' => 'yii\grid\SerialColumn'],

                                    //'id_contactos_dos',
                                    //'nombre',
                                    [
                                        'attribute' => 'nombre',
                                        'value' => 'nombre',
                                        'headerOptions' => ['style'=>'text-align: center'],
                                    ],
                                    //'numero',
                                    [
                                        'attribute' => 'numero',
                                        'value' => 'numero',
                                        'headerOptions' => ['style'=>'text-align: center'],
                                        'contentOptions' => ['style' => 'text-align: center'],
                                    ],
                                    //'numero_2',
                                    [
                                        'attribute' => 'numero_2',
                                        'value' => 'numero_2',
                                        'headerOptions' => ['style'=>'text-align: center'],
                                        'contentOptions' => ['style' => 'text-align: center'],
                                    ],
                                    //'numero_3',
                                    [
                                        'attribute' => 'numero_3',
                                        'value' => 'numero_3',
                                        'headerOptions' => ['style'=>'text-align: center'],
                                        'contentOptions' => ['style' => 'text-align: center'],
                                    ],
                                    //'correo',
                                    [
                                        'attribute' => 'correo',
                                        'value' => 'correo',
                                        'headerOptions' => ['style'=>'text-align: center'],
                                    ],
                                    //'empresa',
                                    [
                                        'attribute' => 'empresa',
                                        'value' => 'empresa',
                                        'headerOptions' => ['style'=>'text-align: center'],
                                    ],
                                    //'descripcion',
                                    [
                                        'attribute' => 'descripcion',
                                        'value' => 'descripcion',
                                        'headerOptions' => ['style'=>'text-align: center'],
                                    ],
                                    ['class' => 'yii\grid\ActionColumn'],
                                ],
                            ]); ?>
                        <?php Pjax::end(); ?>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>    