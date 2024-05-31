<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\YyxtCourseArrange */

$this->title = 'Update Yyxt Course Arrange: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Yyxt Course Arranges', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="yyxt-course-arrange-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
