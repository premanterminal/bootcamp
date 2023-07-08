<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kelas_siswa".
 *
 * @property int|null $id_kelas
 * @property int|null $id_siswa
 */
class KelasSiswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kelas_siswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kelas', 'id_siswa'], 'default', 'value' => null],
            [['id_kelas', 'id_siswa'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kelas' => 'Id Kelas',
            'id_siswa' => 'Id Siswa',
        ];
    }
}
