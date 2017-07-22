<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
        'brandLabel' => 'Cities',
        'brandUrl' => '/city',
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    NavBar::end();
    ?>
    <br><br>
    <div class="container">
        <row>
            <div class="col-md-2">
                <br>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="<?= Url::to(['city/index']) ?>">Список городов</a></li>
                    <li><a href="<?= Url::to(['state/index']) ?>">Список регионов</a></li>
                </ul>
            </div>
            <div class="col-md-10">
                <?= $content ?>
            </div>
        </row>
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
