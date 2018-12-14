<?php

/* @var $this yii\web\View */
use frontend\widgets\banner\BannerWidget;
use frontend\widgets\post\PostWidget;
use frontend\widgets\chat\ChatWidget;
use frontend\widgets\hot\HotWidget;
use frontend\widgets\tag\TagWidget;
use yii\base\Widget;
use yii\helpers\Url;

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
        <!-- 创建文章 -->
        <a class="btn btn-success btn-block btn-post" href="<?=Url::to(['post/create'])?>">创建文章</a>
        <!-- 留言板 -->
        <?= ChatWidget::widget() ?>
        <!-- 热门浏览 -->
        <?= HotWidget::widget() ?>
        <!-- 标签云 -->
        <?= TagWidget::widget() ?>
    </div>
</div>
