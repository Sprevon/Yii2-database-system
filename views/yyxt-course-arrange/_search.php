<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\YyxtCourseArrangeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="yyxt-course-arrange-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'course_id') ?>

    <?= $form->field($model, 'remarks') ?>

    <?= $form->field($model, 'tutor_name') ?>

    <?= $form->field($model, 'c_std_num') ?>

    <?php // echo $form->field($model, 'c_std_major') ?>

    <?php // echo $form->field($model, 'room_id') ?>

    <?php // echo $form->field($model, 'week_id') ?>

    <?php // echo $form->field($model, 'semester_id') ?>

    <?php // echo $form->field($model, 'c_day') ?>

    <?php // echo $form->field($model, 'c_day_time') ?>

    <?php // echo $form->field($model, 'tools') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
