<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rooms".
 *
 * @property integer $roomID
 * @property integer $roomNum
 *
 * @property ServiceBooking[] $serviceBookings
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
            [['roomNum'], 'required'],
            [['roomNum'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'roomID' => 'Room ID',
            'roomNum' => 'Room Num',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServiceBookings()
    {
        return $this->hasMany(ServiceBooking::className(), ['roomID' => 'roomID']);
    }
}
