<?php

namespace app\modules\admin;
use Yii;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;

/**
 * admin module definition class
 */
class Admin extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $layout = '/admin';
    public $controllerNamespace = 'app\modules\admin\controllers';

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'denyCallback' => function($rule, $action) {
                    throw new NotFoundHttpException();
                },
                'rules' => [
                    [
                        'allow' => true,
                        'matchCallback' => function($rule,$action) {
                            if(!Yii::$app->user->isGuest) {
                                return (Yii::$app->user->identity->role == "admin");
                            }
                            return false;
                        }
                    ]
                ]
            ]
        ];
    }
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
