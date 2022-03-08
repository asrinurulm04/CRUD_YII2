<?php

  namespace frontend\controllers;

  use yii;
  use app\models\Mobil;
  use yii\web\Controller;
  use yii\web\NotFoundHttpException;
  use yii\filters\VerbFilter;

  class MobilController extends Controller
  {
    /** Create */
    public function actionCreate(){
        $model = new Mobil();
        // new record
        if($model->load(Yii::$app->request->post()) && $model->save()){
            return $this->redirect(['index']);
        } 
        return $this->render('create', ['model' => $model]);
    }
    
    /** Read */
    public function actionIndex()
    {
        $student = Mobil::find()->all();
         
        return $this->render('index', ['model' => $student]);
    }

    /** Edit */
    public function actionEdit($id)
    {
        $model = Mobil::find()->where(['id_mobil' => $id])->one();
        // jika id kosong
        if($model === null)
            throw new NotFoundHttpException('The requested page does not exist.');
        // update record
        if($model->load(Yii::$app->request->post()) && $model->save()){
            return $this->redirect(['index']);
        }
         
        return $this->render('edit', ['model' => $model]);
    }

    /** Delete */
     public function actionDelete($id)
     {
        $model = Mobil::findOne($id);
        if($model === null)
          throw new NotFoundHttpException('The requested page does not exist.');
          $model->delete();
         
        return $this->redirect(['index']);
     }
  }