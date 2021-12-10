<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Shelter */

$this->title = 'Create Shelter';
$this->params['breadcrumbs'][] = ['label' => 'Shelters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shelter-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
