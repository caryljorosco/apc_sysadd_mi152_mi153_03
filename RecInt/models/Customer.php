<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property integer $id
 * @property string $cus_fname
 * @property string $cus_lname
 * @property string $cus_contact_number
 *
 * @property ServiceBooking[] $serviceBookings
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
            [['cus_fname', 'cus_lname', 'cus_contact_number'], 'required'],
            [['cus_fname', 'cus_lname'], 'string', 'max' => 45],
            [['cus_contact_number'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cus_fname' => 'Firstname',
            'cus_lname' => 'Lastname',
            'cus_contact_number' => 'Contact Number',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServiceBookings()
    {
        return $this->hasMany(ServiceBooking::className(), ['customer_id' => 'id']);
    }
}
