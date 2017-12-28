<?php

namespace app\modules\admin\controllers;

use app\models\ImageUpload;
use app\models\VarietyAddPic;
use Yii;
use app\models\Variety;
use app\models\VarietySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * VarietyController implements the CRUD actions for Variety model.
 */
class VarietyController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Variety models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new VarietySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Variety model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
//        var_dump($model->addpics);die;
        return $this->render('view', [
            'model' => $model,
            'addPics' => $model->addpics,
        ]);
    }

    /**
     * Creates a new Variety model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($item_id)
    {
        $model = new Variety();

        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());
            $model->item_id = $item_id;
            $imgUpload = new ImageUpload();
            $file = UploadedFile::getInstance($model,'img');
            $model->img = $imgUpload->uploadFile($file);
            $model->save();
            return $this->redirect(['item/view', 'id' => $item_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'item_id' => $item_id
            ]);
        }
    }
    public function actionAddpic($id) {
        $model = new ImageUpload();
        if(Yii::$app->request->isPost){
            $file = UploadedFile::getInstance($model,'image');
            $addPic = new VarietyAddPic();
            $addPic->variety_id = $id;
            $addPic->img = $model->uploadFile($file);
            if($addPic->save()) {
                return $this->redirect(["view",'id'=>$id]);
            }
        }else {
            return $this->render('image',[
                'model' => $model
            ]);
        }
    }
    /**
     * Updates an existing Variety model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Variety model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $item_id = $this->findModel($id)->item_id;
        $this->findModel($id)->delete();

        return $this->redirect(['item/view','id'=>$item_id]);
    }

    /**
     * Finds the Variety model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Variety the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Variety::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
