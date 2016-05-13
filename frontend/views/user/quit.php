
<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


?>
<!DOCTYPE HTML>
<html>
<head>
    <title>User Management System</title>
    <meta http-equiv="Content-Type" content="text/html; charset=GB2312" />
    <?/*=Html::cssFile('@web/css/bootstrap.css')*/?>
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
            <h3><p>&nbsp;You are out</p></h3>
            <?php $form=ActiveForm::begin([
                'id'=>'login',
                'enableAjaxValidation' => false,
                'options'=>['enctype'=>'multipart/form-data']
            ]);?>

            <div class="form-group" style="float:right">
                <h4><a href="index.php?r=user/login" type="">Login Now</a></h4>
            </div>
            <?php ActiveForm::end();?>
        </div>
        <div class="col-md-4 sm col-sm-1"></div>
    </div>
</div>
</body>
</html>






