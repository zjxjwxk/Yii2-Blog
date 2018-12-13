<?
use frontend\widgets\post\PostWidget;
use yii\base\Widget;
?>
<div class="row">
	<div class="col-lg-9">
		<?= PostWidget::widget(['limit' => 5]) ?>
	</div>
	<div class="col-lg-3">
		
	</div>
</div>