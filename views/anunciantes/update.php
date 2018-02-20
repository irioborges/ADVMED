<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Anunciantes */

$this->title = 'Update Anunciantes: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Anunciantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="anunciantes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
