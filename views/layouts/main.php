<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <header id="header">
        <?php
        NavBar::begin([
            'brandLabel' => Yii::$app->name,
            'brandUrl' => Yii::$app->homeUrl,
            'options' => ['class' => 'navbar-expand-md navbar-light bg-light fixed-top mt-auto']
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav'],
            'items' => [
                // ['label' => 'About', 'url' => ['/site/about']]
            ]
        ]);
        NavBar::end();
        ?>

    </header>

    <main id="main" class="flex-shrink-0" role="main">
        <div class="container">
            <?php if (!empty($this->params['breadcrumbs'])) : ?>
                <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
            <?php endif ?>
            <?= Alert::widget() ?>
            <div class="row">
                <div class="col-8"><?= $content ?></div>
                <div class="col-4">
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                                <div class="card p-3 py-4">
                                    <div class="text-center">
                                        <img src="https://i.imgur.com/bDLhJiP.jpg" width="100" class="rounded-circle">
                                    </div>

                                    <div class="text-center mt-3">
                                        <!-- <span class="bg-secondary p-1 px-4 rounded text-white">Pro</span> -->
                                        <h5 class="mt-2 mb-0">Anand Ganesan</h5>
                                        <span>Full stack software developer</span>

                                        <div class="px-4 mt-1">
                                            <p class="fonts">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

                                        </div>

                                        <ul class="social-list">
                                            <li><i class="fa fa-facebook"></i></li>
                                            <li><i class="fa fa-dribbble"></i></li>
                                            <li><i class="fa fa-instagram"></i></li>
                                            <li><i class="fa fa-linkedin"></i></li>
                                            <li><i class="fa fa-google"></i></li>
                                        </ul>

                                        <div class="buttons">

                                            <button class="btn btn-outline-primary px-4">Message</button>
                                            <button class="btn btn-primary px-4 ms-3">Contact</button>
                                        </div>






                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </main>

    <footer id="footer" class="mt-auto py-3 bg-light">
        <div class="container">
            <div class="row text-muted">
                <div class="col-md-6 text-center text-md-start">&copy; agancode <?= date('Y') ?></div>
            </div>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>