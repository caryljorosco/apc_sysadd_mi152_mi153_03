<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rooms".
 *
 * @property integer $id
 * @property integer $room_num
 *
 * @property ServiceDetails[] $serviceDetails
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
            [['room_num'], 'required'],
            [['room_num'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'room_num' => 'Room Number',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServiceDetails()
    {
        return $this->hasMany(ServiceDetails::className(), ['rooms_id' => 'id']);
    }
}
