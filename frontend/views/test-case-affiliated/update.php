<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TestCaseAffiliated */

$this->title = 'Update Test Case Affiliated: ' . $model->tca_id;
$this->params['breadcrumbs'][] = ['label' => 'Test Case Affiliateds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tca_id, 'url' => ['view', 'id' => $model->tca_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="test-case-affiliated-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
