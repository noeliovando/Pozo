<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Desviacion */

$this->title = 'Create Desviacion';
$this->params['breadcrumbs'][] = ['label' => 'Desviacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="desviacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
