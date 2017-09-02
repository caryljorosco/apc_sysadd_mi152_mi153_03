<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "booking".
 *
 * @property integer $ID
 * @property string $Booking_Type
 * @property string $time_start
 * @property string $time_end
 * @property string $date_received
 * @property string $duration
 * @property integer $Rooms_ID
 * @property integer $Customer_ID
 * @property integer $Employee_ID
 *
 * @property Rooms $rooms
 * @property Customer $customer
 * @property Employee $employee
 * @property BookingDetails[] $bookingDetails
 */
class Booking extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'booking';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Booking_Type', 'time_start', 'time_end', 'date_received', 'duration'], 'required'],
            [['time_start', 'time_end','date_received', 'duration'], 'safe'],
            [['Rooms_ID', 'Customer_ID', 'Employee_ID'], 'integer'],
            [['Booking_Type'], 'string', 'max' => 15],
            [['Rooms_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Rooms::className(), 'targetAttribute' => ['Rooms_ID' => 'ID']],
            [['Customer_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['Customer_ID' => 'ID']],
            [['Employee_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Employee::className(), 'targetAttribute' => ['Employee_ID' => 'ID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Booking_Type' => 'Booking  Type',
            'time_start' => 'Time Start',
            'time_end' => 'Time End',
            'date_received' => 'Date Received',
            'duration' => 'Duration',
            'Rooms_ID' => 'Rooms  ID',
            'Customer_ID' => 'Customer  ID',
            'Employee_ID' => 'Employee  ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRooms()
    {
        return $this->hasOne(Rooms::className(), ['ID' => 'Rooms_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customer::className(), ['ID' => 'Customer_ID']);
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
    public function getBookingDetails()
    {
        return $this->hasMany(BookingDetails::className(), ['Booking_ID' => 'ID']);
    }
}
