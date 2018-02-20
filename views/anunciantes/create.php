<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Anunciantes */

$this->title = 'Create Anunciantes';
$this->params['breadcrumbs'][] = ['label' => 'Anunciantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anunciantes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
