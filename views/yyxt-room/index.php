<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\YyxtRoomSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Yyxt Rooms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yyxt-room-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Yyxt Room', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'room_name',
            'std_num',
            'remarks',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
