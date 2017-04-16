<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AcademicPeriod */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="academic-period-form">
    <div class="panel panel-default">
        <div class="panel-heading"><h4><i class="fa fa-clock-o bg-success"></i> Academic Period Form</h4></div>
        <div class="panel-body">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'period_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'period_code')->textInput(['maxlength' => true]) ?>

     <?= $form->field($model, 'status')->dropDownList(['prompt'=>Yii::t('app','--Select--'),'1'=>'Active','0'=>'Disable']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
