<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rooms".
 *
 * @property integer $ID
 * @property string $Room_Number
 *
 * @property Booking[] $bookings
 * @property BookingDetails[] $bookingDetails
 */
class Rooms extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rooms';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Room_Number'], 'required'],
            [['Room_Number'], 'string', 'max' => 2],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Room_Number' => 'Room  Number',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookings()
    {
        return $this->hasMany(Booking::className(), ['Rooms_ID' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingDetails()
    {
        return $this->hasMany(BookingDetails::className(), ['Rooms_ID' => 'ID']);
    }
}
