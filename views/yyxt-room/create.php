<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\YyxtRoom */

$this->title = 'Create Yyxt Room';
$this->params['breadcrumbs'][] = ['label' => 'Yyxt Rooms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yyxt-room-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
