<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Resumen */

$this->title = 'Create Resumen';
$this->params['breadcrumbs'][] = ['label' => 'Resumens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resumen-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
