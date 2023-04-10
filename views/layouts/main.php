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
<body style="display:flex; justify-content:space-between;" class="d-flex flex-column">
<?php $this->beginBody() ?>

<header id="header" >
    <?php
    NavBar::begin([
        'brandLabel' => "air<img height='50px' src='../logo.svg'>Wars",
        'brandUrl' => Yii::$app->homeUrl,
        'options' => ['class' => 'navbar-expand-md navbar-dark bg-dark fixed-top']
    ]);

    $items= [];
    if( Yii::$app->user->isGuest){
        $items[]= ['label' => 'Регистрация', 'url' => ['/user/create']];
        $items[]= ['label' => 'Авторизация', 'url' => ['/site/login']];
    }else{
        if(Yii::$app->user->identity->id_role ==2){
            $items[]= ['label' => 'Административная панель', 'url' => ['/admin']];
        }else{
            $items[]= ['label' => 'Корзина', 'url' => ['/busket']];
            $items[]= ['label' => ' Личный кабинет', 'url' => ['/user/view?id= '.Yii::$app->user->identity->id.'']];
        }
        $items[] = '<li class="nav-item">'
                    . Html::beginForm(['/site/logout'])
                    . Html::submitButton(
                        'Выйти (' . Yii::$app->user->identity->login . ')',
                        ['class' => 'nav-link btn btn-link logout']
                    )
                    . Html::endForm()
                    . '</li>';
    }

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => $items,
        // 'items' => [
        //     ['label' => 'Главная', 'url' => ['/site/index']],
        //     ['label' => 'Товары', 'url' => ['/product']],
        //     ['label' => 'Заказы', 'url' => ['/order']],
        //     

    ]);
    NavBar::end();
    ?>
</header>


<main id="main" class="flex-shrink-0" role="main">
    <div class="container">

        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
