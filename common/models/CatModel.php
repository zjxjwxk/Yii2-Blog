<?php

namespace common\models;

use common\models\base\BaseModel;
use Yii;

/**
 * This is the model class for table "cats".
 *
 * @property integer $id
 * @property string $cat_name
 */ 
class CatModel extends BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cats';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '分类ID',
            'cat_name' => '分类名',
        ];
    }

    /**
     * 获取所有分类
     */
    public static function getAllCats()
    {
        $cat = ['0' => '暂无分类'];
        $res = self::find()->asArray()->all();
        if ($res) {
            foreach ($res as $key => $value) {
                $cat[$value['id']] = $value['cat_name'];
            }
        }
        return $cat;
    }
}
