<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\YyxtUser */

$this->title = 'Create Yyxt User';
$this->params['breadcrumbs'][] = ['label' => 'Yyxt Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yyxt-user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
