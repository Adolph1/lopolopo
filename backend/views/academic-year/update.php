<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\AcademicYear */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Academic Year',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Academic Years'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="academic-year-update">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
