<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AnunciantesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Anunciantes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anunciantes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Anunciantes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'Nome',
            'Endereco',
            'Telefone',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
