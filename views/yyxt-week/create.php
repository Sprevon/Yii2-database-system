<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\YyxtWeek */

$this->title = 'Create Yyxt Week';
$this->params['breadcrumbs'][] = ['label' => 'Yyxt Weeks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yyxt-week-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
