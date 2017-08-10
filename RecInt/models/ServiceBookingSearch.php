<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ServiceBooking;

/**
 * ServiceBookingSearch represents the model behind the search form about `app\models\ServiceBooking`.
 */
class ServiceBookingSearch extends ServiceBooking
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bookingID', 'roomID', 'cusID', 'empID'], 'integer'],
            [['bookingType', 'timeReceived'], 'safe'],
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
        $query = ServiceBooking::find();

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
            'bookingID' => $this->bookingID,
            'timeReceived' => $this->timeReceived,
            'roomID' => $this->roomID,
            'cusID' => $this->cusID,
            'empID' => $this->empID,
        ]);

        $query->andFilterWhere(['like', 'bookingType', $this->bookingType]);

        return $dataProvider;
    }
}
