<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "services".
 *
 * @property integer $srvcID
 * @property string $srvcName
 * @property string $srvcDuration
 * @property integer $srvcPrice
 *
 * @property ServiceDetails[] $serviceDetails
 */
class Services extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'services';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['srvcName', 'srvcPrice'], 'required'],
            [['srvcPrice'], 'integer'],
            [['srvcName', 'srvcDuration'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'srvcID' => 'Srvc ID',
            'srvcName' => 'Srvc Name',
            'srvcDuration' => 'Srvc Duration',
            'srvcPrice' => 'Srvc Price',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServiceDetails()
    {
        return $this->hasMany(ServiceDetails::className(), ['srvcID' => 'srvcID']);
    }
}
