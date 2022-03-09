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
        //$model->attributes = \Yii::$app->request->post('Mobil');
        if($model->load(Yii::$app->request->post()) && $model->save()){
            return $this->redirect(['index']);
        } 
        return $this->render('create', ['model' => $model]);
    }
    
    /** Read */
    public function actionIndex(){
        $mobil = Mobil::find()->where(['status'=>'sewa'])->all();
        return $this->render('index', ['model' => $mobil]);
    }

    /** Edit */
    public function actionEdit($id){
        $model = Mobil::find()->where(['id_mobil' => $id])->one();
        if($model === null)
            throw new NotFoundHttpException('The requested page does not exist.');
        if($model->load(Yii::$app->request->post()) && $model->save()){
            return $this->redirect(['index']);
        }
         
        return $this->render('edit', ['model' => $model]);
    }

    /** Delete */
     public function actionDelete($id){
        $model = Mobil::findOne($id);
        $model->status='siap';
        $model->save();
         
        return $this->redirect(['index']);
     }

     public function actionData()
    {
        $mobil = Mobil::find()->where(['status'=>'sewa'])->all();

        return \yii\helpers\Json::encode($mobil);
    }
  }