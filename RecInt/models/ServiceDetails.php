<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "service_details".
 *
 * @property integer $empID
 * @property integer $srvcID
 * @property string $timeStart
 * @property string $timeNeeded
 *
 * @property Employee $emp
 * @property Services $srvc
 */
class ServiceDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'service_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['empID', 'srvcID'], 'integer'],
            [['timeStart'], 'required'],
            [['timeStart', 'timeNeeded'], 'safe'],
            [['empID'], 'exist', 'skipOnError' => true, 'targetClass' => Employee::className(), 'targetAttribute' => ['empID' => 'empID']],
            [['srvcID'], 'exist', 'skipOnError' => true, 'targetClass' => Services::className(), 'targetAttribute' => ['srvcID' => 'srvcID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'empID' => 'Emp ID',
            'srvcID' => 'Srvc ID',
            'timeStart' => 'Time Start',
            'timeNeeded' => 'Time Needed',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmp()
    {
        return $this->hasOne(Employee::className(), ['empID' => 'empID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSrvc()
    {
        return $this->hasOne(Services::className(), ['srvcID' => 'srvcID']);
    }
}
