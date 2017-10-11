<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "services".
 *
 * @property integer $ID
 * @property string $srvc_name
 * @property string $srvc_duration
 * @property string $srvc_price
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
            [['srvc_name', 'srvc_duration', 'srvc_price'], 'required'],
            [['srvc_duration'], 'safe'],
            [['srvc_price'], 'number'],
            [['srvc_name'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'srvc_name' => 'Srvc Name',
            'srvc_duration' => 'Srvc Duration',
            'srvc_price' => 'Srvc Price',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServiceDetails()
    {
        return $this->hasMany(ServiceDetails::className(), ['services_ID' => 'ID']);
    }
}
