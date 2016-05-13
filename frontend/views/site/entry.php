<?php
/**
 * Created by PhpStorm.
 * User: shareworks
 * Date: 16/5/4
 * Time: 下午5:09
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin();$form->action='' ?>

<?= $form->field($model, 'name') ?>

<?= $form->field($model, 'email') ?>

<p>binbin bin</p>

<div class="form-group">
    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>
