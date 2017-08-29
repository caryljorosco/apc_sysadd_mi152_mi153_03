<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property integer $ID
 * @property string $Last_Name
 * @property string $First_Name
 * @property string $Position
 *
 * @property Booking[] $bookings
 * @property BookingDetails[] $bookingDetails
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'Last_Name', 'First_Name', 'Position'], 'required'],
            [['ID'], 'integer'],
            [['Last_Name', 'First_Name', 'Position'], 'string', 'max' => 45],
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
            'Position' => 'Position',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookings()
    {
        return $this->hasMany(Booking::className(), ['Employee_ID' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingDetails()
    {
        return $this->hasMany(BookingDetails::className(), ['Employee_ID' => 'ID']);
    }
}
