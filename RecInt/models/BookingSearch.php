<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Booking;

/**
 * BookingSearch represents the model behind the search form about `app\models\Booking`.
 */
class BookingSearch extends Booking
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'Rooms_ID', 'Customer_ID', 'Employee_ID'], 'integer'],
            [['Booking_Type', 'time_start', 'time_end', 'date_received', 'duration'], 'safe'],
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
        $query = Booking::find();

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
            'ID' => $this->ID,
            'time_start' => $this->time_start,
            'time_end' => $this->time_end,
            'date_received' => $this->date_received,
            'duration' => $this->duration,
            'Rooms_ID' => $this->Rooms_ID,
            'Customer_ID' => $this->Customer_ID,
            'Employee_ID' => $this->Employee_ID,
        ]);

        $query->andFilterWhere(['like', 'Booking_Type', $this->Booking_Type]);

        return $dataProvider;
    }
}
