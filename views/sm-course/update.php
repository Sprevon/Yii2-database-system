<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SmCourse */

$this->title = 'Update Sm Course: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sm Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sm-course-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
