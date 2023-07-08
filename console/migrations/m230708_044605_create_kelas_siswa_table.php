<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%kelas_siswa}}`.
 */
class m230708_044605_create_kelas_siswa_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%kelas_siswa}}', [
            'id_kelas' => $this->integer(),
            'id_siswa' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%kelas_siswa}}');
    }
}
