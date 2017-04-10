<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DesviacionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="desviacion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'uwi') ?>

    <?= $form->field($model, 'md') ?>

    <?= $form->field($model, 'tvd') ?>

    <?= $form->field($model, 'desviation') ?>

    <?= $form->field($model, 'azimuth') ?>

    <?php // echo $form->field($model, 'dx') ?>

    <?php // echo $form->field($model, 'dy') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
