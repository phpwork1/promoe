<?php

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <?= Html::a("Promoe Admin", Yii::$app->getHomeUrl(), ['class' => 'navbar-brand']) ?>
    </div>
    <!-- /.navbar-header -->
    <ul class="nav navbar-top-links navbar-left">
        <?=
        Breadcrumbs::widget([
            'homeLink' => ['label' => '<i class="glyphicon glyphicon-home"></i>', 'encode' => false, 'url' => ['/site/index']],
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
    </ul>
    <ul class="nav navbar-top-links navbar-right">
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li><?= Html::a('<i class="fa fa-sign-out fa-fw"></i> ' . 'Logout', ['site/logout'], ['data' => ['method' => 'post']]); ?></li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="<?= Yii::$app->getHomeUrl() ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="<?= Yii::$app->getHomeUrl() ?>"><i class="fa fa-plus fa-fw"></i> Promoe User</a>
                </li>
                <li>
                    <a href="<?= Yii::$app->getHomeUrl() ?>"><i class="fa fa-photo fa-fw"></i> Promotion</a>
                </li>
                <li>
                    <?= Html::a('<i class="fa fa-location-arrow fa-fw"></i> ' . 'Location', ['/location']); ?>
                </li>
                <li>
                    <a href="<?= Yii::$app->getHomeUrl() ?>"><i class="fa fa-building fa-fw"></i> Company</a>
                </li>
                <li>
                    <?= Html::a('<i class="fa fa-dot-circle-o fa-fw"></i> ' . 'Category', ['/category']); ?>
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>
