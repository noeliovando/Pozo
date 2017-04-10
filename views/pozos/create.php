<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Pozos */

$this->title = 'Create Pozos';
$this->params['breadcrumbs'][] = ['label' => 'Pozos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pozos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
