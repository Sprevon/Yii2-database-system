<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\YyxtCourseArrange */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="yyxt-course-arrange-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'course_id')->textInput() ?>

    <?= $form->field($model, 'remarks')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tutor_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'c_std_num')->textInput() ?>

    <?= $form->field($model, 'c_std_major')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'room_id')->textInput() ?>

    <?= $form->field($model, 'week_id')->textInput() ?>

    <?= $form->field($model, 'semester_id')->textInput() ?>

    <?= $form->field($model, 'c_day')->textInput() ?>

    <?= $form->field($model, 'c_day_time')->textInput() ?>

    <?= $form->field($model, 'tools')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
