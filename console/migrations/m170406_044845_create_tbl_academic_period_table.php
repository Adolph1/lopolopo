<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tbl_academic_period`.
 */
class m170406_044845_create_tbl_academic_period_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('tbl_academic_period', [
            'id' => $this->primaryKey(),
            'period_title'=>$this->string(200)->notNull(),
            'period_code'=>$this->string(20)->notNull(),
            'status'=>$this->integer(),
            'maker_id'=>$this->string(200),
            'maker_time'=>$this->dateTime(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tbl_academic_period');
    }
}
