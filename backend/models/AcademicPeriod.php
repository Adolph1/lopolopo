<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_academic_period".
 *
 * @property integer $id
 * @property string $period_title
 * @property string $period_code
 * @property integer $status
 */
class AcademicPeriod extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    const ACTIVE=1;
    const DISABLED=0;

    public static function tableName()
    {
        return 'tbl_academic_period';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['period_title', 'period_code','status'], 'required'],
            [['maker_time'], 'safe'],
            [['status'], 'integer'],
            [['period_title','maker_id'], 'string', 'max' => 200],
            [['period_code'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'period_title' => Yii::t('app', 'Period Title'),
            'period_code' => Yii::t('app', 'Period Code'),
            'status' => Yii::t('app', 'Status'),
            'maker_id' => Yii::t('app', 'Maker ID'),
            'maker_time' => Yii::t('app', 'Maker Time'),
        ];
    }
}
