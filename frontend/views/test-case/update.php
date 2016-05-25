<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TestCase */

$this->title = 'Update Test Case: ' . $model->case_id;
$this->params['breadcrumbs'][] = ['label' => 'Test Cases', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->case_id, 'url' => ['view', 'id' => $model->case_id]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="test-case-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
