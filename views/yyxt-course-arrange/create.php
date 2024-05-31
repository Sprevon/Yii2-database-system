<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\YyxtCourseArrange */

$this->title = 'Create Yyxt Course Arrange';
$this->params['breadcrumbs'][] = ['label' => 'Yyxt Course Arranges', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yyxt-course-arrange-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
