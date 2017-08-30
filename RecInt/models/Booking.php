<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "booking".
 *
 * @property integer $id
 * @property string $booking_type
 * @property string $date
 * @property string $time_start
 * @property string $time_end
 * @property string $duration
 * @property integer $customer_id
 * @property integer $employee_id
 * @property integer $rooms_id
 *
 * @property Customer $customer
 * @property Employee $employee
 * @property Rooms $rooms
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
            [['id', 'booking_type', 'date', 'time_start', 'time_end', 'duration', 'customer_id', 'employee_id', 'rooms_id'], 'required'],
            [['id', 'customer_id', 'employee_id', 'rooms_id'], 'integer'],
            [['date', 'time_start', 'time_end', 'duration'], 'safe'],
            [['booking_type'], 'string', 'max' => 15],
            [['customer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['customer_id' => 'id']],
            [['employee_id'], 'exist', 'skipOnError' => true, 'targetClass' => Employee::className(), 'targetAttribute' => ['employee_id' => 'id']],
            [['rooms_id'], 'exist', 'skipOnError' => true, 'targetClass' => Rooms::className(), 'targetAttribute' => ['rooms_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'booking_type' => 'Booking Type',
            'date' => 'Date',
            'time_start' => 'Time Start',
            'time_end' => 'Time End',
            'duration' => 'Duration',
            'customer_id' => 'Customer ID',
            'employee_id' => 'Employee ID',
            'rooms_id' => 'Rooms ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customer::className(), ['id' => 'customer_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployee()
    {
        return $this->hasOne(Employee::className(), ['id' => 'employee_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRooms()
    {
        return $this->hasOne(Rooms::className(), ['id' => 'rooms_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingDetails()
    {
        return $this->hasMany(BookingDetails::className(), ['Booking_id' => 'id']);
    }
}
