<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Kelas;

/**
 * KelasSearch represents the model behind the search form of `common\models\Kelas`.
 */
class KelasSearch extends Kelas
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_tahun_ajaran', 'id_wali_kelas', 'id_ruangan'], 'integer'],
            [['nama_kelas', 'id_tingkat_kelas'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Kelas::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_tahun_ajaran' => $this->id_tahun_ajaran,
            'id_wali_kelas' => $this->id_wali_kelas,
            'id_ruangan' => $this->id_ruangan,
        ]);

        $query->andFilterWhere(['ilike', 'nama_kelas', $this->nama_kelas])
            ->andFilterWhere(['ilike', 'id_tingkat_kelas', $this->id_tingkat_kelas]);

        return $dataProvider;
    }
}
