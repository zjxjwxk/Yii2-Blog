<?
namespace frontend\widgets\chat;
/**
 * 留言板
 */
use Yii;
use yii\bootstrap\Widget;
use yii\base\Object;
use frontend\models\FeedForm;

class ChatWidget extends Widget
{
	public function run()
	{
		$feed = new FeedForm();
		$data['feed'] = $feed->getList();
		return $this->render('index', ['data' => $data]);
	}
}