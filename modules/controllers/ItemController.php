<?php

namespace app\modules\controllers;

use app\models\AdditionalPic;
use app\models\ImageUpload;
use Yii;
use app\models\Item;
use app\models\ItemSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ItemController implements the CRUD actions for Item model.
 */
class ItemController extends Controller
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
     * Lists all Item models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ItemSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Item model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $addPics = $model->additionalPics;
        $varieties = $model->varieties;
        return $this->render('view', [
            'model' => $model,
            'addPics'=> $addPics,
            'varieties' => $varieties
        ]);
    }

    /**
     * Creates a new Item model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Item();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Item model.
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
     * Deletes an existing Item model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }
    public function actionSetimg($id){
        $model = new ImageUpload();

        if(Yii::$app->request->isPost){
            $item = $this->findModel($id);
            $file = UploadedFile::getInstance($model,'image');
            if($item->saveImage($model->uploadFile($file, $item->img))) {
                return $this->redirect(["view",'id'=>$id]);
            }
        }else {
            return $this->render('image',[
                'model' => $model
            ]);
        }
    }
    public function actionAddpic($id) {
        $model = new ImageUpload();
        if(Yii::$app->request->isPost){
            $file = UploadedFile::getInstance($model,'image');
            $addPic = new AdditionalPic();
            $addPic->item_id = $id;
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
     * Finds the Item model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Item the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Item::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
