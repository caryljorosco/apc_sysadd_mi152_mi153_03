<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "userinfo".
 *
 * @property integer $User_ID
 * @property string $Name
 * @property string $Nickname
 * @property string $Email
 * @property string $Home_Address
 * @property string $Gender
 * @property string $Cp_Num
 * @property string $Comment
 */
class Userinfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'userinfo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'Nickname', 'Email', 'Gender', 'Cp_Num'], 'required'],
            [['Name'], 'string', 'max' => 50],
            [['Nickname'], 'string', 'max' => 20],
            [['Email'], 'string', 'max' => 60],
            [['Home_Address'], 'string', 'max' => 100],
            [['Gender'], 'string', 'max' => 8],
            [['Cp_Num'], 'string', 'max' => 15],
            [['Comment'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'User_ID' => 'User  ID',
            'Name' => 'Name',
            'Nickname' => 'Nickname',
            'Email' => 'Email',
            'Home_Address' => 'Home  Address',
            'Gender' => 'Gender',
            'Cp_Num' => 'Cp  Num',
            'Comment' => 'Comment',
        ];
    }
}
