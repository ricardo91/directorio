<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ContactosDos;

/**
 * ContactosDosSearch represents the model behind the search form about `app\models\ContactosDos`.
 */
class ContactosDosSearch extends ContactosDos
{
    public $globalSearch;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_contactos_dos', 'numero', 'numero_2', 'numero_3'], 'integer'],
            [['nombre', 'correo', 'empresa', 'descripcion', 'globalSearch'], 'safe'],
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
        $query = ContactosDos::find();

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
            'id_contactos_dos' => $this->id_contactos_dos,
            //'numero' => $this->numero,
        ]);

        $query->andFilterWhere(['like', 'numero', $this->numero])
            ->andFilterWhere(['like', 'numero_2', $this->numero_2])
            ->andFilterWhere(['like', 'numero_3', $this->numero_3])
            ->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'correo', $this->correo])
            ->andFilterWhere(['like', 'empresa', $this->empresa])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion]);

        $query->orFilterWhere(['like', 'numero', $this->globalSearch])
            ->orFilterWhere(['like', 'numero_2', $this->globalSearch])
            ->orFilterWhere(['like', 'numero_3', $this->globalSearch]) 
            ->orFilterWhere(['like', 'nombre', $this->globalSearch])
            ->orFilterWhere(['like', 'correo', $this->globalSearch]) 
            ->orFilterWhere(['like', 'empresa', $this->globalSearch])
            ->orFilterWhere(['like', 'descripcion', $this->globalSearch]);

        return $dataProvider;
    }
}
