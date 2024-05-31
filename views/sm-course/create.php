<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SmCourse */

$this->title = 'Create Sm Course';
$this->params['breadcrumbs'][] = ['label' => 'Sm Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sm-course-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
