<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property integer $empID
 * @property string $empFname
 * @property string $empLname
 * @property string $empPosition
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
            [['empID', 'empFname', 'empLname', 'empPosition'], 'required'],
            [['empID'], 'integer'],
            [['empFname', 'empLname', 'empPosition'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'empID' => 'Emp ID',
            'empFname' => 'Emp Fname',
            'empLname' => 'Emp Lname',
            'empPosition' => 'Emp Position',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServiceBookings()
    {
        return $this->hasMany(ServiceBooking::className(), ['empID' => 'empID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServiceDetails()
    {
        return $this->hasMany(ServiceDetails::className(), ['empID' => 'empID']);
    }
}
