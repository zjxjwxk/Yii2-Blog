<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\UserModel */

$this->title = '编辑用户信息：' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => '用户信息', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '编辑';
?>
<div class="user-model-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
