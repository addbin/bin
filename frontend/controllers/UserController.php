<?php
/**
 * Created by PhpStorm.
 * User: shareworks
 * Date: 16/5/6
 * Time: 上午11:49
 */
namespace frontend\controllers;

use frontend\models\Login;
use yii;
use frontend\models\Register;
use yii\web\Controller;

class UserController extends Controller
{
    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        $model = new Login();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $_SESSION['username']=$model->username;
             return $this->render('nav');
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public  function actionNav()
    {
        return $this->render('nav');
    }

    public function actionRegister()
    {
        $model = new Register();
        if ($model->load(Yii::$app->request->post())&& $model->validate()) {
            if ($model->register()) {
                return $this->render('success');
            }
        } else {
            return $this->render('register', [
                'model' => $model,
            ]);
        }
    }

    public function actionCreate()
    {
        $model = new Register();
        if ($model->load(Yii::$app->request->post())&& $model->validate()) {
            if ($model->register()) {
                return $this->render(['nav']);
            }
        } else {
            return $this->render('register', [
                'model' => $model,
            ]);
        }
    }

    public function actionSuccess()
    {
        return $this->render('success');
    }

    public function actionQuit()
    {
        session_start();
        session_unset();
        return $this->render('quit');
    }
}