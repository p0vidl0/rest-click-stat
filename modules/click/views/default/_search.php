<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\click\models\ClickSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="click-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'object') ?>

    <?= $form->field($model, 'timestamp') ?>

    <?= $form->field($model, 'referer') ?>

    <?= $form->field($model, 'user_ip4') ?>

    <?php // echo $form->field($model, 'user_host') ?>

    <?php // echo $form->field($model, 'user_agent') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
