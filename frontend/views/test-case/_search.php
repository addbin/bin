<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TestCaseSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<?php
require("turn.php");
?>

<div class="test-case-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'case_id') ?>

    <?= $form->field($model, 'id_case') ?>

    <?= $form->field($model, 'illustration') ?>

    <?= $form->field($model, 'route') ?>

    <?= $form->field($model, 'key') ?>

    <?= $form->field($model, 'value') ?>

    <?php // echo $form->field($model, 'label') ?>


    <?php // echo $form->field($model, 'trigger') ?>


    <?php // echo $form->field($model, 'delete') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
