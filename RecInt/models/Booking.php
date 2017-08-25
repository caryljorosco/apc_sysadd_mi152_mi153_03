<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "booking".
 *
 * @property integer $ID
 * @property string $Booking_Type
 * @property string $Date_Time_Received
 * @property integer $Customer_ID
 * @property integer $Employee_ID
 *
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
            [['Booking_Type', 'Date_Time_Received'], 'required'],
            [['Date_Time_Received'], 'safe'],
            [['Customer_ID', 'Employee_ID'], 'integer'],
            [['Booking_Type'], 'string', 'max' => 15],
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
            'Date_Time_Received' => 'Date  Time  Received',
            'Customer_ID' => 'Customer  ID',
            'Employee_ID' => 'Employee  ID',
        ];
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
