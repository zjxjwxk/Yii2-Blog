<?php

/* @var $this yii\web\View */
use frontend\widgets\banner\BannerWidget;
use frontend\widgets\post\PostWidget;
use frontend\widgets\chat\ChatWidget;
use yii\base\Widget;

$this->title = '博客-首页';
?>

<div class="row">
    <div class="col-lg-9">
        <!-- 图片轮播 -->
        <?= BannerWidget::widget() ?>
        <!-- 文章列表 -->
        <?= PostWidget::widget() ?>
    </div>
    <div class="col-lg-3">
        <!-- 留言板 -->
        <?= ChatWidget::widget() ?>
    </div>
</div>
