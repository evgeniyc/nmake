<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


<div id="header">
    <?php
    NavBar::begin([
       	'brandImage' => '@web/images/brand2.jpg',
		'brandUrl' => Yii::$app->homeUrl,
		'screenReaderToggleText' => 'Menu',
		'options' => [
			'id' => 'main-menu',
            'class' => 'navbar navbar-expand-md navbar-dark bg-primary',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav mr-auto'],
        'items' => [
            ['label' => 'Главная', 'url' => ['/site/index']],
            ['label' => 'О нас', 'url' => ['/site/about']],
            ['label' => 'Контакты', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Вход', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Выход (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
	echo '<div id="brand-title">'.Yii::$app->name.'</div>';
	echo '<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>';
	
    NavBar::end();
    ?>
</div> <!--====================header==========================-->
<div class="container">
    <div id="breadcrumbs">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
	</div>
	<div id="alerts">	
        <?= Alert::widget() ?>
	</div>
	<div id="middle">
        <?= $content ?>
    </div>

<footer>
    <div class="container">
        <p class="float-left">&copy; Nmake <?= date('Y') ?></p>

        <p class="float-right"><?= Yii::powered() ?></p>
    </div>
</footer>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
