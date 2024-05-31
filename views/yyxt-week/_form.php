<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\YyxtWeek */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="yyxt-week-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'week_id')->textInput() ?>

    <?= $form->field($model, 'week_detail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'semester_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
