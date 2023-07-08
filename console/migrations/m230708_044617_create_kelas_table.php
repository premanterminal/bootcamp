<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%kelas}}`.
 */
class m230708_044617_create_kelas_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%kelas}}', [
            'id' => $this->primaryKey(),
            'id_tahun_ajaran' => $this->integer(),
            'id_wali_kelas' => $this->integer(),
            'id_ruangan' => $this->integer(),
            'nama_kelas' => $this->string(),
            'id_tingkat_kelas' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%kelas}}');
    }
}
