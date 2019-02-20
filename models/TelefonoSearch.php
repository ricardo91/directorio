<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Telefono;

/**
 * TelefonoSearch represents the model behind the search form about `app\models\Telefono`.
 */
class TelefonoSearch extends Telefono
{
    public $globalSearch;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_telefono'], 'integer'],
            [['numero', 'direccion_id', 'cargo_id', 'piso', 'descripcion', 'globalSearch'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Telefono::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => ['defaultOrder' => ['numero' => SORT_ASC]],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->joinWith('cargo');
        $query->joinWith('direccion');

        $query->andFilterWhere([
            'id_telefono' => $this->id_telefono,
            'direccion_id' => $this->direccion_id,
            'cargo_id' => $this->cargo_id,
        ]);

        $query->andFilterWhere(['like', 'numero', $this->numero])
            ->andFilterWhere(['like', 'piso', $this->piso])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion]);
            //->andFilterWhere(['like', 'cargo_id', $this->cargo_id])
            //->andFilterWhere(['like', 'direccion_id', $this->direccion_id]);

        $query->orFilterWhere(['like', 'numero', $this->globalSearch])
            ->orFilterWhere(['like', 'piso', $this->globalSearch])
            ->orFilterWhere(['like', 'descripcion', $this->globalSearch]) 
            ->orFilterWhere(['like', 'cargo.cargo', $this->globalSearch])
            ->orFilterWhere(['like', 'direccion.direccion', $this->globalSearch]);

        return $dataProvider;
    }


}
