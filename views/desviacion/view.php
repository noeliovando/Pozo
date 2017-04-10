<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Desviacion */

$this->title = $model->uwi;
$this->params['breadcrumbs'][] = ['label' => 'Desviacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="desviacion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'uwi' => $model->uwi, 'md' => $model->md], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'uwi' => $model->uwi, 'md' => $model->md], [
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
            'uwi',
            'md',
            'tvd',
            'desviation',
            'azimuth',
            'dx',
            'dy',
        ],
    ]) ?>

</div>
