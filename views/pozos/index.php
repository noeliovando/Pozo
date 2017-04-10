<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PozosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pozos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pozos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pozos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'uwi',
            //'well_name',
            //'well_number',
            //'drillers_td',
            //'elevation',
            // 'block_id',
            // 'location_table',
            // 'field_name',
            // 'well_alias',
            // 'plot_name',
            // 'ground_elevation',
            'spud_date',
            'inicio_perf',
            'fin_drill',
            'comp_date',
            // 'primary_source',
            // 'class',
            // 'operator',
            // 'form_at_td',
            // 'tvd',
            // 'log_td',
            // 'prov_st',
            // 'country',
            // 'county',
            // 'discover_well',
            // 'agent',
            // 'description',
            // 'district',
            // 'govt_assigned_no',
            // 'whipstock_depth',
            // 'rig_no',
            // 'contractor',
            // 'geologic_providence',
            // 'hole_direction',
            // 'initial_class',
            // 'node_x',
            // 'node_y',
            // 'latitude',
            // 'longitude',
            // 'datum',
            'inserted_by',
            'insert_date',
            'row_changed_by',
            'row_changed_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
