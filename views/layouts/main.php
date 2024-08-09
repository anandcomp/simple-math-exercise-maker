<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;

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
    <div class="container pt-3 text-center text-primary">
        <h3>Math excercise PDF maker</h3>
    </div>
    <main id="main" class="flex-shrink-0" role="main">
        <div class="container">
            <?php if (!empty($this->params['breadcrumbs'])) : ?>
                <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
            <?php endif ?>
            <?= Alert::widget() ?>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 col-xl-12 col-sm-12 col-xs-12">
                    <?= $content ?>
                </div>
                <!-- <div class="col-md-2 col-lg-2 col-xl-2">
                    <div class="row d-flex justify-content-center">
                        <div class="text-center">
                            <div class="badge-base LI-profile-badge" data-locale="en_US" data-size="large" data-theme="light" data-type="HORIZONTAL" data-vanity="agancode" data-version="v1"><a class="badge-base__link LI-simple-link" href="https://in.linkedin.com/in/agancode?trk=profile-badge"></a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </main>
    <footer id="footer" class="mt-auto py-3 bg-light">
        <div class="container">
            <div class="row text-muted">
                <div class="col-md-6 text-center text-md-start">&copy; Anand Ganesan <?= date('Y') ?></div>
            </div>
        </div>
    </footer>
    <?php $this->endBody() ?>
    <script src="https://platform.linkedin.com/badges/js/profile.js" async defer type="text/javascript"></script>
</body>

</html>
<?php $this->endPage() ?>