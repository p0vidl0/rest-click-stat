<?php

namespace app\modules\click\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "click".
 *
 * @property integer $id
 * @property string $object
 * @property integer $timestamp
 * @property string $referer *
 * @property string $user_ip4
 * @property string $user_host
 * @property string $user_agent
 */
class Click extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'click';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['timestamp'], 'integer'],
            [['object', 'referer', 'user_ip4', 'user_host', 'user_agent'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'object' => 'Ссылка',
            'timestamp' => 'Дата',
            'referer' => 'Источник',
            'user_ip4' => 'IPv4',
            'user_host' => 'Хост',
            'user_agent' => 'Браузер',
        ];
    }

    /**
     * @inheritdoc
     * @return ClickQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ClickQuery(get_called_class());
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'timestamp',
                'updatedAtAttribute' => false,
            ],
        ];
    }

    public function beforeSave($insert)
    {
        if ($insert) {
            $this->user_ip4 = Yii::$app->request->userIP;
            $this->user_host = Yii::$app->request->userHost;
            $this->user_agent = Yii::$app->request->userAgent;
        }
        return parent::beforeSave($insert);
    }
}
