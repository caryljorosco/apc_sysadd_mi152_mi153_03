<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "booking_details".
 *
 * @property integer $id
 * @property integer $Booking_id
 * @property integer $employee_id
 * @property integer $services_ID
 *
 * @property Booking $booking
 * @property Employee $employee
 * @property Services $services
 */
class Booking_Details extends \yii\db\ActiveRecord
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
            [['id', 'Booking_id', 'employee_id', 'services_ID'], 'required'],
            [['id', 'Booking_id', 'employee_id', 'services_ID'], 'integer'],
            [['Booking_id'], 'exist', 'skipOnError' => true, 'targetClass' => Booking::className(), 'targetAttribute' => ['Booking_id' => 'id']],
            [['employee_id'], 'exist', 'skipOnError' => true, 'targetClass' => Employee::className(), 'targetAttribute' => ['employee_id' => 'id']],
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
            'Booking_id' => 'Booking ID',
            'employee_id' => 'Employee ID',
            'services_ID' => 'Services  ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooking()
    {
        return $this->hasOne(Booking::className(), ['id' => 'Booking_id']);
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
    public function getServices()
    {
        return $this->hasOne(Services::className(), ['ID' => 'services_ID']);
    }
}
