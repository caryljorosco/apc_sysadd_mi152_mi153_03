<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "roomschedule".
 *
 * @property integer $ID
 * @property string $Date
 * @property string $Room_Number
 * @property string $Time
 *
 * @property BookingDetails[] $bookingDetails
 */
class Roomschedule extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'roomschedule';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Date', 'Room_Number', 'Time'], 'required'],
            [['Date', 'Time'], 'safe'],
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
            'Date' => 'Date',
            'Room_Number' => 'Room  Number',
            'Time' => 'Time',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingDetails()
    {
        return $this->hasMany(BookingDetails::className(), ['RoomSchedule_ID' => 'ID']);
    }
}
