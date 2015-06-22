<?php
namespace app\controllers;

use yii\filters\Cors;
use yii\helpers\ArrayHelper;
use yii\rest\ActiveController;

class RestClickController extends ActiveController
{
    // указываем класс модели, который будет использоваться
    public $modelClass = 'app\modules\click\models\Click';

    public function behaviors()
    {
        return
            ArrayHelper::merge(parent::behaviors(), [
                'corsFilter' => [
                    'class' => Cors::className(),
                ],
            ]);
    }

    public function actions()
    {
        return [
//            'index' => [
//                'class' => 'yii\rest\IndexAction',
//                'modelClass' => $this->modelClass,
//                'checkAccess' => [$this, 'checkAccess'],
//            ],
//            'view' => [
//                'class' => 'yii\rest\ViewAction',
//                'modelClass' => $this->modelClass,
//                'checkAccess' => [$this, 'checkAccess'],
//            ],
            'create' => [
                'class' => 'yii\rest\CreateAction',
                'modelClass' => $this->modelClass,
                'checkAccess' => [$this, 'checkAccess'],
                'scenario' => $this->createScenario,
            ],
//            'update' => [
//                'class' => 'yii\rest\UpdateAction',
//                'modelClass' => $this->modelClass,
//                'checkAccess' => [$this, 'checkAccess'],
//                'scenario' => $this->updateScenario,
//            ],
//            'delete' => [
//                'class' => 'yii\rest\DeleteAction',
//                'modelClass' => $this->modelClass,
//                'checkAccess' => [$this, 'checkAccess'],
//            ],
//            'options' => [
//                'class' => 'yii\rest\OptionsAction',
//            ],
        ];
    }
}