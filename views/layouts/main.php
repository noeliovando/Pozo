<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\bootstrap\mynavbar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => 'Pozo Web',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-default navbar-fixed-top',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'Inicio', 'url' => ['/site/index']],
                    ['label' => 'Bloques', 'url' => ['/bloques'], 'visible' => !Yii::$app->user->isGuest &&Yii::$app->user->identity->rol=='100'],
                    ['label' => 'Datos Generales', 'url' => ['/pozos'], 'visible' => !Yii::$app->user->isGuest &&Yii::$app->user->identity->rol=='100'],
                    ['label' => 'Desviaciones', 'url' => ['/desviacion'], 'visible' => !Yii::$app->user->isGuest &&Yii::$app->user->identity->rol=='100'],
                    ['label' => 'Resumen', 'url' => ['/resumen'], 'visible' => !Yii::$app->user->isGuest &&Yii::$app->user->identity->rol=='100'],
                    Yii::$app->user->isGuest ?
                        ['label' => 'Iniciar Sesión', 'url' => ['/site/login']] :
                        ['label' => 'Cerrar Sesión (' . Yii::$app->user->identity->username . ')',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']],
                ],
            ]);
            NavBar::end();
        ?>

        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
            <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
