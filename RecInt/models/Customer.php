<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property integer $id
 * @property string $cus_fname
 * @property string $cus_lname
 * @property string $cus_co
 *
 * @property Booking[] $bookings
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'cus_fname', 'cus_lname', 'cus_co'], 'required'],
            [['id'], 'integer'],
            [['cus_fname', 'cus_lname'], 'string', 'max' => 45],
            [['cus_co'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cus_fname' => 'Cus Fname',
            'cus_lname' => 'Cus Lname',
            'cus_co' => 'Cus Co',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookings()
    {
        return $this->hasMany(Booking::className(), ['customer_id' => 'id']);
    }
}
