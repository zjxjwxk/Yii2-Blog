<?
use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = '创建文章';
$this->params['breadcrumbs'][] = ['label' => '文章', 'url' => ['post/index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="row">
	<div class="col-lg-9">
		<div class="panel-title box-title">
			<span>创建文章</span>
		</div>
		<div class="panel-body">
			<? $form = ActiveForm::begin() ?>

			<?= $form->field($model, 'title')->textinput(['maxlenth' => true]) ?>

			<?= $form->field($model, 'cat_id')->dropDownList($cat) ?>

			<?= $form->field($model, 'label_img')->widget('common\widgets\file_upload\FileUpload', [
				'config'=>[

				]
			]) ?>

			<?= $form->field($model, 'content')->widget('common\widgets\ueditor\Ueditor',[
			    'options'=>[
			    	
			    ]
			]) ?>

			<?= $form->field($model, 'tags')->widget('common\widgets\tags\TagWidget') ?>

			<div class="form-group">
				<?= Html::submitButton("发布", ['class' => 'btn btn-success'])?>
			</div>
			<? ActiveForm::end() ?>
		</div>
	</div>
	<div class="col-lg-3">
		<div class="panel-title box-title">
			<span>注意事项</span>
		</div>
		<div class="panel-body">
			<p>1.如非原创请注明参考来源及链接</p>
			<p>2.请不要发布非法内容</p>
		</div>
	</div>
</div>