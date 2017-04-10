<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Desviacion */

$this->title = 'Update Desviacion: ' . ' ' . $model->uwi;
$this->params['breadcrumbs'][] = ['label' => 'Desviacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->uwi, 'url' => ['view', 'uwi' => $model->uwi, 'md' => $model->md]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="desviacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
