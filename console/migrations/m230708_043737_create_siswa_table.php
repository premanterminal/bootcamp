<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%siswa}}`.
 */
class m230708_043737_create_siswa_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%siswa}}', [
            'id' => $this->primaryKey(),
            'nis' => $this->string()->unique(),
            'nama_siswa' => $this->string()->notNull(),
            'tanggal_lahir' => $this->date(),
            'alamat' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%siswa}}');
    }
}
