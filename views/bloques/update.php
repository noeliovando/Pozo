<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Bloques */

$this->title = 'Update Bloques: ' . ' ' . $model->id_bloque;
$this->params['breadcrumbs'][] = ['label' => 'Bloques', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_bloque, 'url' => ['view', 'id' => $model->id_bloque]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bloques-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
