<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ShelterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Shelters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shelter-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить в приют животное', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                    'attribute' => 'type',
                    'filter' => [ 'Кошки' => 'Кошки', 'Собаки' => 'Собаки', 'Черепахи' => 'Черепахи', ]
            ],
            'nik',
            'age',
            [
                    'attribute' => 'status',
                    'format' => 'raw',
                    'value' => function ($model) {
                        /** @var $model common\models\Image */
                        return ($model->status == 1) ? 'Еще в приюте' : 'Забрали';
                    }
            ],
            //'created_at',
            //'updated_at',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{shelter}',
                'buttons' => [
                    'shelter' => function ($url, $model, $key) {
                        return ($model->status == 1) ? Html::a('Забрать из приюта', \yii\helpers\Url::to(['shelter/view', 'id' => $model->id])) : '';
                    }
                ],
            ],
        ],
    ]); ?>


</div>
