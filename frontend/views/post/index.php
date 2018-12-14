<?
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\widgets\post\PostWidget;
use yii\base\Widget;
use frontend\widgets\hot\HotWidget;
use frontend\widgets\tag\TagWidget;
?>
<div class="row">
	<div class="col-lg-9">
		<!-- 文章列表 -->
		<?= PostWidget::widget(['limit' => 5]) ?>
	</div>
	<div class="col-lg-3">
		<!-- 创建文章 -->
		<a class="btn btn-success btn-block btn-post" href="<?=Url::to(['post/create'])?>">创建文章</a>
		<!-- 热门浏览 -->
		<?= HotWidget::widget() ?>
		<!-- 标签云 -->
        <?= TagWidget::widget() ?>
	</div>
</div>