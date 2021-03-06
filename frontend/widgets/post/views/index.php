<?
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
<div class="panel">
    <div class="panel-title box-title">
        <span><?=$data['title']?></span>
        <? if($this->context->more):?>
        <span class="pull-right"><a href="<?=$data['more']?>" class="font-12">更多</a></span>
        <? endif;?>
    </div>
    <div class="new-list">
    <? foreach ($data['body'] as $list):?>
        <div class="panel-body border-bottom">
            <div class="row">
                <div class="col-lg-4 label-img-size">
                    <a href="#" class="post-label">
                        <img src="<?=($list['label_img']?\Yii::$app->params['upload_url'].$list['label_img']:\Yii::$app->params['default_label_img'])?>" alt="<?=$list['title']?>">
                    </a>
                </div>
                <div class="col-lg-8 btn-group">
                    <h1><a href="<?=Url::to(['post/view','id'=>$list['id']])?>"><?=$list['title']?></a></h1>
                    <span class="post-tags">
                        <span class="glyphicon glyphicon-user"></span><?=$list['user_name']?>&nbsp;
                        <span class="glyphicon glyphicon-time"></span><?=date('Y-m-d',$list['created_at'])?>&nbsp;
                        <span class="glyphicon glyphicon-eye-open"></span><?=isset($list['extend']['browser'])?$list['extend']['browser']:0?>&nbsp;
                        <span class="glyphicon glyphicon-comment"></span><a href="<?=Url::to(['post/view','id'=>$list['id']])?>"><?=isset($list['extend']['comment'])?$list['extend']['comment']:0?></a>
                    </span>
                    <p class="post-content"><?=$list['summary']?></p>
                    <a href="<?=Url::to(['post/view','id'=>$list['id']])?>"><button class="btn btn-warning no-radius btn-sm pull-right">阅读全文</button></a>
                </div>
            </div>
            <div class="tags">
                <? if(!empty($list['tags'])):?>
                <span class="fa fa-tags"></span>
                    <? foreach ($list['tags'] as $lt):?>
                    <a class="label label-success" href="#"><?=$lt?></a>
                    <? endforeach;?>
                <? endif;?>
            </div>
        </div>
        <? endforeach;?>            
    </div>
    <? if($this->context->page):?>
    <div class="page"><?=LinkPager::widget(['pagination' => $data['page']]);?></div>
    <? endif;?>
</div>