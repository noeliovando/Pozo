<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Desviacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="desviacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'uwi')->textInput(['maxlength' => 16]) ?>

    <?= $form->field($model, 'md')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'tvd')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'desviation')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'azimuth')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'dx')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'dy')->textInput(['maxlength' => 25]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
