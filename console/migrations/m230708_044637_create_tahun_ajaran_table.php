<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tahun_ajaran}}`.
 */
class m230708_044637_create_tahun_ajaran_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tahun_ajaran}}', [
            'id' => $this->primaryKey(),
            'tahun_mulai' => $this->integer(),
            'tahun_selesai' => $this->integer(),
            'status_berjalan' => $this->boolean(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tahun_ajaran}}');
    }
}
