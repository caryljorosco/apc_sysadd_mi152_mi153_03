<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "service_booking".
 *
 * @property integer $bookingID
 * @property string $bookingType
 * @property string $timeReceived
 * @property integer $roomID
 * @property integer $cusID
 * @property integer $empID
 *
 * @property Rooms $room
 * @property Customer $cus
 * @property Employee $emp
 */
class ServiceBooking extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'service_booking';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['timeReceived'], 'safe'],
            [['roomID', 'cusID', 'empID'], 'integer'],
            [['bookingType'], 'string', 'max' => 15],
            [['roomID'], 'exist', 'skipOnError' => true, 'targetClass' => Rooms::className(), 'targetAttribute' => ['roomID' => 'roomID']],
            [['cusID'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['cusID' => 'cusID']],
            [['empID'], 'exist', 'skipOnError' => true, 'targetClass' => Employee::className(), 'targetAttribute' => ['empID' => 'empID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bookingID' => 'Booking ID',
            'bookingType' => 'Booking Type',
            'timeReceived' => 'Time Received',
            'roomID' => 'Room ID',
            'cusID' => 'Cus ID',
            'empID' => 'Emp ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoom()
    {
        return $this->hasOne(Rooms::className(), ['roomID' => 'roomID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCus()
    {
        return $this->hasOne(Customer::className(), ['cusID' => 'cusID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmp()
    {
        return $this->hasOne(Employee::className(), ['empID' => 'empID']);
    }
}
