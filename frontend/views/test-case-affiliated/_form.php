

<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Update Test Case Affiliated: ' . $model->tca_id;
$this->params['breadcrumbs'][] = ['label' => 'Test Cases', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tca_id, 'url' => ['view', 'id' => $model->case_id]];
$this->params['breadcrumbs'][] = 'Update';
?>

<?php
require("turn.php");
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
    .login{background: #fff;padding: 3em;margin-top: 3em;border-radius: 0.5em;}
    /*label{display: none;}*/
    .mr20{margin-right:10px;}
    h3{font-family: "microsoft yahei", "黑体"}
</style>
<div class="container">
    <div class="row">

        <div class="col-md-6 col-md-offset-3 sm col-sm-1 login">

            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'options' => ['class' => 'form-horizontal'],
                'fieldConfig' => [
                    'template' => "{label}\n<div class=\"col-lg-7\">{input}</div>\n<div class=\"col-lg-5\">{error}</div>",
                    'labelOptions' => ['class' => 'col-lg-4 control-label'],
                ],
            ]); ?>

            <h2 ><?= Html::encode($this->title) ?></h2>

            <?= $form->field($model, 'case_id')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'label')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'delete')->textInput() ?>

            <?= $form->field($model, 'created_at')->textInput() ?>

            <?= $form->field($model, 'updated_at')->textInput() ?>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-9">
                    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
        <div class="col-md-4 sm col-sm-1"></div>
    </div>
</div>
</body>
</html>
