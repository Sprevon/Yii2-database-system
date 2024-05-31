<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\YyxtCourseArrangeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Yyxt Course Arranges';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yyxt-course-arrange-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Yyxt Course Arrange', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'course_id',
            'remarks',
            'tutor_name',
            'c_std_num',
            // 'c_std_major',
            // 'room_id',
            // 'week_id',
            // 'semester_id',
            // 'c_day',
            // 'c_day_time:datetime',
            // 'tools',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
