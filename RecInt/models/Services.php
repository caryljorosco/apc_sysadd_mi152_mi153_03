<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "services".
 *
 * @property integer $ID
 * @property string $Service_Name
 * @property string $Description
 * @property string $Duration
 * @property string $Price
 *
 * @property BookingDetails[] $bookingDetails
 */
class Services extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'services';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Service_Name', 'Duration', 'Price'], 'required'],
            [['Price'], 'number'],
            [['Service_Name', 'Duration'], 'string', 'max' => 45],
            [['Description'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Service_Name' => 'Service  Name',
            'Description' => 'Description',
            'Duration' => 'Duration',
            'Price' => 'Price',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingDetails()
    {
        return $this->hasMany(BookingDetails::className(), ['Services_ID' => 'ID']);
    }
}
