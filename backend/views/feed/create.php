<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\FeedModel */

$this->title = '创建留言';
$this->params['breadcrumbs'][] = ['label' => '留言管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="feed-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
