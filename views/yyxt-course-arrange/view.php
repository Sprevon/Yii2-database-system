<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\YyxtCourseArrange */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Yyxt Course Arranges', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yyxt-course-arrange-view">

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
            'course_id',
            'remarks',
            'tutor_name',
            'c_std_num',
            'c_std_major',
            'room_id',
            'week_id',
            'semester_id',
            'c_day',
            'c_day_time:datetime',
            'tools',
        ],
    ]) ?>

</div>
