<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SmCourseCat */

$this->title = 'Update Sm Course Cat: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sm Course Cats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sm-course-cat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
