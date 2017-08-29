<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property integer $ID
 * @property string $Last_Name
 * @property string $First_Name
 * @property string $Middle_Name
 * @property string $Contact_Number
 *
 * @property Booking[] $bookings
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
            [['Last_Name', 'First_Name', 'Middle_Name', 'Contact_Number'], 'required'],
            [['Last_Name', 'First_Name', 'Middle_Name'], 'string', 'max' => 45],
            [['Contact_Number'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Last_Name' => 'Last  Name',
            'First_Name' => 'First  Name',
            'Middle_Name' => 'Middle  Name',
            'Contact_Number' => 'Contact  Number',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookings()
    {
        return $this->hasMany(Booking::className(), ['Customer_ID' => 'ID']);
    }
}
