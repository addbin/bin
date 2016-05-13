<?php
/**
 * Created by PhpStorm.
 * User: shareworks
 * Date: 16/5/4
 * Time: 下午5:20
 */
use yii\helpers\Html;
?>
<p>You have entered the following information:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>