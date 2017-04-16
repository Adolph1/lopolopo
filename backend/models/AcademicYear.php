<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_academic_year".
 *
 * @property integer $id
 * @property string $year_title
 * @property integer $status
 * @property string $maker_id
 * @property string $maker_time
 */
class AcademicYear extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    const ACTIVE=1;
    const INACTIVE=0;

    public static function tableName()
    {
        return 'tbl_academic_year';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['year_title','status'], 'required'],
            [['status'], 'integer'],
            [['maker_time'], 'safe'],
            [['year_title', 'maker_id'], 'string', 'max' => 200],
            [['year_title'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'year_title' => Yii::t('app', 'Year Title'),
            'status' => Yii::t('app', 'Status'),
            'maker_id' => Yii::t('app', 'Maker ID'),
            'maker_time' => Yii::t('app', 'Maker Time'),
        ];
    }
}
