<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "booking_details".
 *
 * @property integer $ID
 * @property integer $Booking_ID
 * @property integer $Employee_ID
 * @property integer $Services_ID
 * @property integer $RoomSchedule_ID
 *
 * @property Booking $booking
 * @property Employee $employee
 * @property Services $services
 * @property Roomschedule $roomSchedule
 */
class BookingDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'booking_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Booking_ID', 'Employee_ID', 'Services_ID', 'RoomSchedule_ID'], 'integer'],
            [['Booking_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Booking::className(), 'targetAttribute' => ['Booking_ID' => 'ID']],
            [['Employee_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Employee::className(), 'targetAttribute' => ['Employee_ID' => 'ID']],
            [['Services_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Services::className(), 'targetAttribute' => ['Services_ID' => 'ID']],
            [['RoomSchedule_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Roomschedule::className(), 'targetAttribute' => ['RoomSchedule_ID' => 'ID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Booking_ID' => 'Booking  ID',
            'Employee_ID' => 'Employee  ID',
            'Services_ID' => 'Services  ID',
            'RoomSchedule_ID' => 'Room Schedule  ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooking()
    {
        return $this->hasOne(Booking::className(), ['ID' => 'Booking_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployee()
    {
        return $this->hasOne(Employee::className(), ['ID' => 'Employee_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServices()
    {
        return $this->hasOne(Services::className(), ['ID' => 'Services_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoomSchedule()
    {
        return $this->hasOne(Roomschedule::className(), ['ID' => 'RoomSchedule_ID']);
    }
}
