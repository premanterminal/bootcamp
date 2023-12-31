<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tingkatan".
 *
 * @property int $id
 * @property string|null $nama_tingkatan
 */
class Tingkatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tingkatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_tingkatan'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_tingkatan' => 'Nama Tingkatan',
        ];
    }
}
