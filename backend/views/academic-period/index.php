<?php

use yii\helpers\Html;
use backend\models\AcademicPeriodSearch;
use backend\models\AcademicPeriod;
use fedemotta\datatables\DataTables;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AcademicPeriodSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Academic Periods');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="academic-period-index">
    <p style="float: right">
        <?= Html::a(Yii::t('app', 'Add Academic Period'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>



    <?php
    $searchModel = new AcademicPeriodSearch();
    $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    ?>

    <?= DataTables::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'period_title',
            'period_code',
            'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
