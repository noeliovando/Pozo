<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DesviacionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Desviaciones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="desviacion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Desviacion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'pager' => [
            'firstPageLabel'=>'Primero',
            'lastPageLabel'=>'Ultimo'
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'uwi',
            'md',
            'tvd',
            'desviation',
            'azimuth',
            // 'dx',
            // 'dy',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
