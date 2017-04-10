<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PozosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pozos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'uwi') ?>

    <?= $form->field($model, 'well_name') ?>

    <?= $form->field($model, 'well_number') ?>

    <?= $form->field($model, 'drillers_td') ?>

    <?= $form->field($model, 'elevation') ?>

    <?php // echo $form->field($model, 'block_id') ?>

    <?php // echo $form->field($model, 'location_table') ?>

    <?php // echo $form->field($model, 'field_name') ?>

    <?php // echo $form->field($model, 'well_alias') ?>

    <?php // echo $form->field($model, 'plot_name') ?>

    <?php // echo $form->field($model, 'ground_elevation') ?>

    <?php // echo $form->field($model, 'spud_date') ?>

    <?php // echo $form->field($model, 'inicio_perf') ?>

    <?php // echo $form->field($model, 'fin_drill') ?>

    <?php // echo $form->field($model, 'comp_date') ?>

    <?php // echo $form->field($model, 'primary_source') ?>

    <?php // echo $form->field($model, 'class') ?>

    <?php // echo $form->field($model, 'operator') ?>

    <?php // echo $form->field($model, 'form_at_td') ?>

    <?php // echo $form->field($model, 'tvd') ?>

    <?php // echo $form->field($model, 'log_td') ?>

    <?php // echo $form->field($model, 'prov_st') ?>

    <?php // echo $form->field($model, 'country') ?>

    <?php // echo $form->field($model, 'county') ?>

    <?php // echo $form->field($model, 'discover_well') ?>

    <?php // echo $form->field($model, 'agent') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'district') ?>

    <?php // echo $form->field($model, 'govt_assigned_no') ?>

    <?php // echo $form->field($model, 'whipstock_depth') ?>

    <?php // echo $form->field($model, 'rig_no') ?>

    <?php // echo $form->field($model, 'contractor') ?>

    <?php // echo $form->field($model, 'geologic_providence') ?>

    <?php // echo $form->field($model, 'hole_direction') ?>

    <?php // echo $form->field($model, 'initial_class') ?>

    <?php // echo $form->field($model, 'node_x') ?>

    <?php // echo $form->field($model, 'node_y') ?>

    <?php // echo $form->field($model, 'latitude') ?>

    <?php // echo $form->field($model, 'longitude') ?>

    <?php // echo $form->field($model, 'datum') ?>

    <?php // echo $form->field($model, 'inserted_by') ?>

    <?php // echo $form->field($model, 'insert_date') ?>

    <?php // echo $form->field($model, 'row_changed_by') ?>

    <?php // echo $form->field($model, 'row_changed_date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
