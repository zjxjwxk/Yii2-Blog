<?
namespace frontend\controllers;

use Yii;
use frontend\controllers\base\BaseController;
use frontend\models\PostForm;
use common\models\CatModel;

/**
 * 文章控制器
 */
class PostController extends BaseController
{
	/**
	 * 文章列表
	 */
	public function actionIndex()
	{
		return $this->render('index');
	}

	/**
	 * 创建文章
	 */
	public function actionCreate()
	{
		$model = new PostForm();
		// 获取所有分类
		$cat = CatModel::getAllCats();
		return $this->render('create', ['model' => $model, 'cat' => $cat]);
	}
}