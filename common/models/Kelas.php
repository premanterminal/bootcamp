<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kelas".
 *
 * @property int $id
 * @property int|null $id_tahun_ajaran
 * @property int|null $id_wali_kelas
 * @property int|null $id_ruangan
 * @property string|null $nama_kelas
 * @property string|null $id_tingkat_kelas
 */
class Kelas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kelas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_tahun_ajaran', 'id_wali_kelas', 'id_ruangan'], 'default', 'value' => null],
            [['id_tahun_ajaran', 'id_wali_kelas', 'id_ruangan'], 'integer'],
            [['nama_kelas', 'id_tingkat_kelas'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_tahun_ajaran' => 'Id Tahun Ajaran',
            'id_wali_kelas' => 'Id Wali Kelas',
            'id_ruangan' => 'Id Ruangan',
            'nama_kelas' => 'Nama Kelas',
            'id_tingkat_kelas' => 'Id Tingkat Kelas',
        ];
    }
}
