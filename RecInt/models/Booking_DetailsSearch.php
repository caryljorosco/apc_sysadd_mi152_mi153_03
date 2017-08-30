<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Booking_Details;

/**
 * Booking_DetailsSearch represents the model behind the search form about `app\models\Booking_Details`.
 */
class Booking_DetailsSearch extends Booking_Details
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'Booking_id', 'employee_id', 'services_ID'], 'integer'],
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
        $query = Booking_Details::find();

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
            'Booking_id' => $this->Booking_id,
            'employee_id' => $this->employee_id,
            'services_ID' => $this->services_ID,
        ]);

        return $dataProvider;
    }
}
