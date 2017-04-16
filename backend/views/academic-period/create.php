<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\AcademicPeriod */

$this->title = Yii::t('app', 'Create Academic Period');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Academic Periods'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="academic-period-create">

    <h1><?php // Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
