<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property integer $cusID
 * @property string $cusFname
 * @property string $cusLname
 * @property integer $cusContactNum
 *
 * @property ServiceBooking[] $serviceBookings
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cusFname', 'cusLname'], 'required'],
            [['cusContactNum'], 'integer'],
            [['cusFname', 'cusLname'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cusID' => 'Cus ID',
            'cusFname' => 'Cus Fname',
            'cusLname' => 'Cus Lname',
            'cusContactNum' => 'Cus Contact Num',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServiceBookings()
    {
        return $this->hasMany(ServiceBooking::className(), ['cusID' => 'cusID']);
    }
}
