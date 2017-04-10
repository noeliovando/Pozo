<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pozos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pozos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'uwi')->textInput(['maxlength' => 16]) ?>

    <?= $form->field($model, 'well_name')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'well_number')->textInput() ?>

    <?= $form->field($model, 'drillers_td')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'elevation')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'block_id')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'location_table')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'field_name')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'well_alias')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'plot_name')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'ground_elevation')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'spud_date')->textInput() ?>

    <?= $form->field($model, 'inicio_perf')->textInput() ?>

    <?= $form->field($model, 'fin_drill')->textInput() ?>

    <?= $form->field($model, 'comp_date')->textInput() ?>

    <?= $form->field($model, 'primary_source')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'class')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'operator')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'form_at_td')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'tvd')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'log_td')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'prov_st')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'county')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'discover_well')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'agent')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'district')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'govt_assigned_no')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'whipstock_depth')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'rig_no')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'contractor')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'geologic_providence')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'hole_direction')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'initial_class')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'node_x')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'node_y')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'latitude')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'longitude')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'datum')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'inserted_by')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'insert_date')->textInput() ?>

    <?= $form->field($model, 'row_changed_by')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'row_changed_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
