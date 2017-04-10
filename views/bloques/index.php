<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BloquesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bloques';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bloques-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Bloques', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_bloque',
            'bloque',
            'yacimiento:ntext',
            'campo:ntext',
            'zona_supervisoria:ntext',
            'unidad_explotacion:ntext',
            'distrito:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
