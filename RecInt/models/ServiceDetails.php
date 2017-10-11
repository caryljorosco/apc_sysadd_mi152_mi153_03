<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "service_details".
 *
 * @property integer $id
 * @property integer $employee_id
 * @property integer $services_ID
 * @property integer $rooms_id
 * @property string $date
 * @property string $time_started
 * @property string $time_ended
 * @property string $booking_type
 * @property integer $service_booking_id
 *
 * @property Employee $employee
 * @property Rooms $rooms
 * @property ServiceBooking $serviceBooking
 * @property Services $services
 */
class ServiceDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'service_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['employee_id', 'services_ID', 'rooms_id', 'date', 'time_started', 'time_ended', 'booking_type', 'service_booking_id'], 'required'],
            [['employee_id', 'services_ID', 'rooms_id', 'service_booking_id'], 'integer'],
            [['date', 'time_started', 'time_ended'], 'safe'],
            [['booking_type'], 'string', 'max' => 45],
            [['employee_id'], 'exist', 'skipOnError' => true, 'targetClass' => Employee::className(), 'targetAttribute' => ['employee_id' => 'id']],
            [['rooms_id'], 'exist', 'skipOnError' => true, 'targetClass' => Rooms::className(), 'targetAttribute' => ['rooms_id' => 'id']],
            [['service_booking_id'], 'exist', 'skipOnError' => true, 'targetClass' => ServiceBooking::className(), 'targetAttribute' => ['service_booking_id' => 'id']],
            [['services_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Services::className(), 'targetAttribute' => ['services_ID' => 'ID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'employee_id' => 'Employee',
            'services_ID' => 'Services',
            'rooms_id' => 'Rooms',
            'date' => 'Date',
            'time_started' => 'Time Started',
            'time_ended' => 'Time Ended',
            'booking_type' => 'Booking Type',
            'service_booking_id' => 'Service Booking',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployee()
    {
        return $this->hasOne(Employee::className(), ['id' => 'employee_id']);
    }
	public function getEmployeeName()
	{
		return $this->Employee->First_Name.' '. $this->Employee->Last_Name;
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
    public function getServiceBooking()
    {
        return $this->hasOne(ServiceBooking::className(), ['id' => 'service_booking_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServices()
    {
        return $this->hasOne(Services::className(), ['ID' => 'services_ID']);
		
    }
	
	public function getCustomer()
    {
        return $this->hasOne(Customer::className(), ['ID' => 'Customer_ID']);
    }
	public function getCustomerName()
	{
		return $this->customer->First_Name.' '. $this->customer->Last_Name;
	}
    /**
     * @return \yii\db\ActiveQuery
     */
	

}
