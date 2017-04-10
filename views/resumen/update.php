<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Resumen */

$this->title = 'Update Resumen: ' . ' ' . $model->uwi;
$this->params['breadcrumbs'][] = ['label' => 'Resumens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->uwi, 'url' => ['view', 'id' => $model->uwi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="resumen-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
