<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SmCourseCat */

$this->title = 'Create Sm Course Cat';
$this->params['breadcrumbs'][] = ['label' => 'Sm Course Cats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sm-course-cat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
