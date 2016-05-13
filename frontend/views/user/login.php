
<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

?>
<!DOCTYPE HTML>
<html>
<head>
    <title>User Management System</title>
    <meta http-equiv="Content-Type" content="text/html; charset=GB2312" />
</head>
<body>
<style>
    body{background: #009A61}
    .login{background: #fff;padding: 3em;margin-top: 10em;border-radius: 0.5em;}
    label{display: none;}
    .mr20{margin-right:20px;}
    h3{font-family: "microsoft yahei", "黑体"}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-4 sm col-sm-1"></div>
        <div class="col-md-4 sm col-sm-1 login">
            <h3><p><span class='glyphicon glyphicon-user'></span>&nbsp;Login</p></h3>
            <?php $form=ActiveForm::begin([
                'id'=>'login',
                'enableAjaxValidation' => false,
                'options'=>['enctype'=>'multipart/form-data']
            ]);?>

            <?= $form->field($model, 'username')->textInput(["placeholder"=>"username"]) ?>

            <?= $form->field($model, 'password')->passwordInput(["placeholder"=>"password"]) ?>

            <div class="form-group"  style="float:left">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
            <div class="form-group" style="float:left">
                <h5><a href="index.php?r=user/register" style="text-decoration:none;">&nbsp;&nbsp;&nbsp; Register</a>
                </h5>
            </div>
            <?php ActiveForm::end();?>
        </div>
        <div class="col-md-4 sm col-sm-1"></div>
    </div>
</div>
</body>
</html>


