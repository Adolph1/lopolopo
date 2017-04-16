<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tbl_academic_year`.
 */
class m170405_085653_create_tbl_academic_year_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('tbl_academic_year', [
            'id' => $this->primaryKey(),
            'year_title'=>$this->string(200)->unique(),
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
        $this->dropTable('tbl_academic_year');
    }
}
