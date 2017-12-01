<?php

use common\widgets\Alert;
use yii\widgets\Breadcrumbs;

//use common\widgets\Alert;
/* @var $content string */

?>
<div id="page-wrapper">
        <section class="content">
            <?= Alert::widget() ?>
            <?= $content ?>
        </section>
</div>

