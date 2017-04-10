<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Resumen */

$this->title = $model->uwi;
$this->params['breadcrumbs'][] = ['label' => 'Resumens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resumen-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->uwi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->uwi], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'uwi',
            'well_name',
            'well_number',
            'drillers_td',
            'elevation',
            'block_id',
            'location_table',
            'field_name',
            'well_alias',
            'plot_name',
            'ground_elevation',
            'spud_date',
            'insert_date',
            'inicio_perf',
            'fin_drill',
            'comp_date',
            'primary_source',
            'class',
            'operator',
            'form_at_td',
            'tvd',
            'log_td',
            'prov_st',
            'country',
            'county',
            'discover_well',
            'agent',
            'description',
            'district',
            'govt_assigned_no',
            'whipstock_depth',
            'rig_no',
            'contractor',
            'geologic_providence',
            'hole_direction',
            'initial_class',
            'node_x',
            'node_y',
            'latitude',
            'longitude',
            'datum',
        ],
    ]) ?>

</div>
