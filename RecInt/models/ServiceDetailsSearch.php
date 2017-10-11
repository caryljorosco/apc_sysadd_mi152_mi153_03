<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ServiceDetails;

/**
 * ServiceDetailsSearch represents the model behind the search form about `app\models\ServiceDetails`.
 */
class ServiceDetailsSearch extends ServiceDetails
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'employee_id', 'services_ID', 'rooms_id', 'service_booking_id'], 'integer'],
            [['date', 'time_started', 'time_ended', 'booking_type'], 'safe'],
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
        $query = ServiceDetails::find();

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
            'employee_id' => $this->employee_id,
            'services_ID' => $this->services_ID,
            'rooms_id' => $this->rooms_id,
            'date' => $this->date,
            'time_started' => $this->time_started,
            'time_ended' => $this->time_ended,
            'service_booking_id' => $this->service_booking_id,
        ]);

        $query->andFilterWhere(['like', 'booking_type', $this->booking_type]);

        return $dataProvider;
    }
}
