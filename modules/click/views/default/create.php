<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\click\models\Click */

$this->title = 'Create Click';
$this->params['breadcrumbs'][] = ['label' => 'Clicks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="click-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
