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
            <div class="row pt-2">
                <div class="card-deck col-8"><?= $content ?></div>
                <div class="col-4">
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            <div class="card p-3 py-4">
                                <div class="text-center">
                                    <!-- <img src="anand.png" width="100" class="rounded"> -->
                                </div>
                                <div class="text-center mt-3">
                                    <h5 class="mt-2 mb-0">Anand Ganesan</h5>
                                    <span>Full stack software developer</span><br />
                                    <span>Theni, Tamilnadu, India</span><br />
                                    <div class="px-4 mt-1">
                                        <p class="fonts">As a web developer, I am responsible for designing, developing, and maintaining web applications that meet the needs and expectations of our clients. I have over 5 years of experience in web development, with a focus on PHP (Laravel, Yii2 and Codeigniter ) frameworks, MySQL and Git. I am passionate about creating web applications that are user-friendly, secure, and scalable, using the best practices and standards of web development. I enjoy learning new technologies and tools that can enhance my skills and improve the quality of my work. I am also committed to collaborating with my team and delivering projects on time. </p>
                                    </div>
                                    <ul class="social-list">
                                        <li><i class="fa fa-facebook"></i></li>
                                        <li><i class="fa fa-dribbble"></i></li>
                                        <li><i class="fa fa-instagram"></i></li>
                                        <li><i class="fa fa-linkedin"></i></li>
                                        <li><i class="fa fa-google"></i></li>
                                    </ul>
                                    <div class="buttons">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#0077B5" class="bi bi-linkedin" viewBox="0 0 16 16">
                                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                                        </svg>
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