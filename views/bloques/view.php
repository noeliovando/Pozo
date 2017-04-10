<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Bloques */

$this->title = $model->id_bloque;
$this->params['breadcrumbs'][] = ['label' => 'Bloques', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bloques-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_bloque], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_bloque], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_bloque',
            'bloque',
            'yacimiento:ntext',
            'campo:ntext',
            'zona_supervisoria:ntext',
            'unidad_explotacion:ntext',
            'distrito:ntext',
        ],
    ]) ?>

</div>
