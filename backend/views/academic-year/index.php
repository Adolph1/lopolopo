<?php

use yii\helpers\Html;
use backend\models\AcademicYearSearch;
use backend\models\AcademicYear;
use fedemotta\datatables\DataTables;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AcademicYearSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Academic Years');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="academic-year-index">
    <p style="float: right">
        <?= Html::a(Yii::t('app', 'Add Academic Year'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <h1><i class="fa fa-calendar-check-o"></i> <?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?php
    $searchModel = new AcademicYearSearch();
    $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    ?>

    <?= DataTables::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'year_title',
            [
                    'attribute'=>'status',
                    'value'=>function ($model){
                        if($model->status==AcademicYear::ACTIVE){
                            return "Default";
                        }
                        elseif ($model->status==AcademicYear::INACTIVE){
                            return "Inactive";
                        }
                    }
            ],

            //'maker_id',
            //'maker_time',

            [
                'class'=>'yii\grid\ActionColumn',
                'header'=>'Operations',
                'template'=>'{view} {edit} {block}',
                'buttons'=>[
                    'view' => function ($url, $model) {
                        if($model->status!=AcademicYear::ACTIVE) {
                            $url = ['active', 'id' => $model->id];
                            return Html::a('<span class="fa fa-check"></span>', $url, [
                                'title' => 'Active',
                                'data-toggle' => 'tooltip', 'data-original-title' => 'Save',
                                'class' => 'btn btn-success',

                            ]);

                        }
                    },
                    'edit' => function ($url, $model) {
                        $url=['update','id' => $model->id];
                        return Html::a('<span class="fa fa-edit"></span>', $url, [
                            'title' => 'Edit',
                            'data-toggle'=>'tooltip','data-original-title'=>'Save',
                            'class'=>'btn btn-info',

                        ]);


                    },
                    'block' => function ($url, $model) {
                        if($model->status!=AcademicYear::ACTIVE) {
                            $url = ['block', 'id' => $model->id];
                            return Html::a('<span class="fa fa-minus-square"></span>', $url, [
                                'title' => 'Block',
                                'data-toggle' => 'tooltip', 'data-original-title' => 'Save',
                                'class' => 'btn btn-danger',

                            ]);

                        }
                    }
                ]
            ],
        ],
    ]); ?>
</div>
