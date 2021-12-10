<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Shelter */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Shelters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="shelter-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Забрать из приюта?', ['out', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>

    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'type',
            'nik',
            'age',
        ],
    ]) ?>

</div>
