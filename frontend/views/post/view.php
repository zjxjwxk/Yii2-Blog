<?

use frontend\widgets\hot\HotWidget;
use yii\helpers\Url;

$this->title = $data['title'];
$this->params['breadcrumbs'][] = ['label' => '文章', 'url' => ['post/index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="row">
	<div class="col-lg-9">
		<div class="page-title">
			<h1><?= $data['title'] ?></h1>
			<span>作者：<?= $data['user_name'] ?></span>
			<span>发布：<?= date('Y-m-d', $data['created_at']) ?></span>
			<span>浏览：<?= isset($data['extend']['browser']) ? $data['extend']['browser'] : 0 ?></span>
		</div>
		<div class="page-content">
			<?= $data['content'] ?>	
		</div>
		<div class="page-tag">
			标签：
				<? foreach ($data['tags'] as $tag): ?>
					<span><a class="label label-success" href="#"><?= $tag ?></a></span>
				<? endforeach; ?>
		</div>
	</div>
	<div class="col-lg-3">
		<!-- 创建文章 -->
		<? if(!\Yii::$app->user->isGuest): ?>
  			<a class="btn btn-success btn-block btn-post" href="<?=Url::to(['post/create'])?>">创建文章</a>
  		<!-- 编辑文章 -->
  		<? if(\Yii::$app->user->identity->id == $data['user_id']) ?>
    		<a class="btn btn-primary btn-block btn-post" href="<?=Url::to(['post/update','id'=>$data['id']])?>">编辑文章</a> 
       	<? ?>
       	<!-- 删除文章 -->
  		<? if(\Yii::$app->user->identity->id == $data['user_id']) ?>
    		<a class="btn btn-danger btn-block btn-post" href="<?=Url::to(['post/delete','id'=>$data['id']])?>">删除文章</a>
       	<? ?>
      	<? endif;?> 
		<!-- 热门浏览 -->
		<?= HotWidget::widget() ?>
	</div>
</div>