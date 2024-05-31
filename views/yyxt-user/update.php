<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\YyxtUser */

$this->title = 'Update Yyxt User: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Yyxt Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="yyxt-user-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
