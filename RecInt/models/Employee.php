<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property integer $id
 * @property string $emp_fname
 * @property string $emp_lname
 * @property string $emp_position
 *
 * @property ServiceBooking[] $serviceBookings
 * @property ServiceDetails[] $serviceDetails
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['emp_fname', 'emp_lname', 'emp_position'], 'required'],
            [['emp_fname', 'emp_lname', 'emp_position'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'emp_fname' => 'Firstname',
            'emp_lname' => 'Lastname',
            'emp_position' => 'Position',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServiceBookings()
    {
        return $this->hasMany(ServiceBooking::className(), ['employee_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServiceDetails()
    {
        return $this->hasMany(ServiceDetails::className(), ['employee_id' => 'id']);
    }
}
