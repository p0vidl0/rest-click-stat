<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\click\models\Click */

$this->title = 'Update Click: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Clicks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="click-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
