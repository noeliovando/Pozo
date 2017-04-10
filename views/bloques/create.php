<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Bloques */

$this->title = 'Create Bloques';
$this->params['breadcrumbs'][] = ['label' => 'Bloques', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bloques-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
