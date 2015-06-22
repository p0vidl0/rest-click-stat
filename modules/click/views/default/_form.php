<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\click\models\Click */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="click-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'object')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'timestamp')->textInput() ?>

    <?= $form->field($model, 'referer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_ip4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_host')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_agent')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
