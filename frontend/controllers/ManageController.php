<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/7
 * Time: 20:25
 */
namespace frontend\controllers;
use yii;
use frontend\models\User;
use yii\web\Controller;
use frontend\models\UserSearch;


class ManageController extends Controller{
    public $enableCsrfValidation = false;

    public  function actionIndex(){
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionShow()
    {
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index',[
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
//    public function actionDelete($id){
//        /*echo $id;*/
//        /*Yii::app()->db->createCommand()->delete('user', "id=$id");
//        return  $this->render("index.php?r=manage/show");*/
//        $model=new User();
//        $user=$model->deleteAll("id=$id");
//                /*$del="delete from user WHERE id=$id";
//                $model->createCommand($del);*/
//        if($user>0)
//        {
//            return  $this->redirect('index.php?r=user/nav');
//            /*return $this->render('showuser',['users'=>$user,]);*/
//        }
//        else return null;
//    }



    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new User();
        if ($model->load(Yii::$app->request->post())) {
            $model->password = md5($model->password);
            if($model->save())
            {
                return $this->redirect(['manage/index']);
            }
            else {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) ) {
            $model->password = md5($model->password);
            if($model->save())
            {
                return $this->redirect(['manage/index']);
            }
            return $this->redirect(['manage/index']);

        } else {
            return $this->render('_form', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }



}