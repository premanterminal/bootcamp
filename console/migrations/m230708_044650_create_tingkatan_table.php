<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tingkatan}}`.
 */
class m230708_044650_create_tingkatan_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tingkatan}}', [
            'id' => $this->primaryKey(),
            'nama_tingkatan' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tingkatan}}');
    }
}
