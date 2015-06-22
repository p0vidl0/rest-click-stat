<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\click\models\Click */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Clicks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="click-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'object',
            'timestamp:datetime',
            'referer',
            'user_ip4',
            'user_host',
            'user_agent',
        ],
    ]) ?>

</div>
