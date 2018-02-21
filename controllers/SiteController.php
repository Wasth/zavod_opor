<?php

namespace app\controllers;

use app\models\Item;
use app\models\Variety;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        $items = Item::find()->all();
        return $this->render('index',[
            'items' => $items
        ]);
    }
    public function actionItem($id){
        $item = Item::findOne($id);
        if($item){
            return $this->render('card',[
                'item'=>$item,
                'varieties' => $item->varieties
            ]);
        }
        return $this->render('error');
    }
    public function actionVariety($id){
        $variety = Variety::findOne($id);
        if($variety) {
            return $this->render('fullvariety', [
                "variety" => $variety,
            ]);
        }
        return $this->render('error');
    }
    public function actionMyadmin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect('/admin/');
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }
    public function actionExitadmin(){
        Yii::$app->user->logout();

        return $this->redirect('/myadmin');
    }


    public function actionCatalog(){
        $items = Item::find()->all();
        return $this->render('catalog',[
            'items' => $items
        ]);
    }
    public function actionMedia(){
        return $this->render('media');
    }
    public function actionContacts(){
        return $this->render('contacts');
    }

}
