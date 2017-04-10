<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pozos */

$this->title = 'Update Pozos: ' . ' ' . $model->uwi;
$this->params['breadcrumbs'][] = ['label' => 'Pozos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->uwi, 'url' => ['view', 'id' => $model->uwi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pozos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
