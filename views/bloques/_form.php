<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Bloques */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bloques-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bloque')->textInput(['maxlength' => 25]) ?>

    <?= $form->field($model, 'yacimiento')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'campo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'zona_supervisoria')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'unidad_explotacion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'distrito')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
