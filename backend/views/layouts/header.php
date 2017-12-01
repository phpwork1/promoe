<?php

use yii\helpers\Html;

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
    <!-- /.navbar-top-links -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                    </div>
                    <!-- /input-group -->
                </li>
                <li>
                    <a href="<?= Yii::$app->getHomeUrl() ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="<?= Yii::$app->getHomeUrl() ?>"><i class="fa fa-plus fa-fw"></i> User</a>
                </li>
                <li>
                    <a href="<?= Yii::$app->getHomeUrl() ?>"><i class="fa fa-photo fa-fw"></i> Promotion</a>
                </li>
                <li>
                    <a href="<?= Yii::$app->getHomeUrl() ?>"><i class="fa fa-location-arrow fa-fw"></i> Location</a>
                </li>
                <li>
                    <a href="<?= Yii::$app->getHomeUrl() ?>"><i class="fa fa-building fa-fw"></i> Company</a>
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>
