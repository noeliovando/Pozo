<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BloquesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bloques-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_bloque') ?>

    <?= $form->field($model, 'bloque') ?>

    <?= $form->field($model, 'yacimiento') ?>

    <?= $form->field($model, 'campo') ?>

    <?= $form->field($model, 'zona_supervisoria') ?>

    <?php // echo $form->field($model, 'unidad_explotacion') ?>

    <?php // echo $form->field($model, 'distrito') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
