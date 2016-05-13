
<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


?>
<!DOCTYPE HTML>
<html>
<head>
    <title>User Management System</title>
    <meta http-equiv="Content-Type" content="text/html; charset=GB2312" />
    <?=Html::cssFile('../css/bootstrap.css')?>

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
            <h3><p><span class='glyphicon glyphicon-user'></span>&nbsp;Register</p></h3>
            <?php $form=ActiveForm::begin([
                'id'=>'login',
                'enableAjaxValidation' => false,
                'options'=>['enctype'=>'multipart/form-data']
            ]);?>


            <?= $form->field($model, 'username')->textInput(["placeholder"=>"username"]) ?>

            <?= $form->field($model, 'password')->passwordInput(["placeholder"=>"password"]) ?>

            <?= $form->field($model, 'confirmpassword')->passwordInput(["placeholder"=>"confirmpassword"]) ?>

            <div class="form-group">
                <?= Html::submitButton('register', ['class' => 'btn btn-primary', 'name' => 'register-button']) ?>
            </div>

            <?php ActiveForm::end();?>
        </div>
        <div class="col-md-4 sm col-sm-1"></div>
    </div>
</div>
</body>
</html>


