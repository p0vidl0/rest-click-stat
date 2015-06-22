<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\click\models\ClickSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Клики "Позвонить"';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="click-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php //echo Html::a('Create Click', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'object',
            [
                'attribute' => 'timestamp',
                'format' =>  ['date', 'HH:mm:ss dd.MM.YYYY'],
                'options' => ['width' => '200']
            ],
            'referer',
            'user_ip4',
            'user_host',
            'user_agent',

//            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
