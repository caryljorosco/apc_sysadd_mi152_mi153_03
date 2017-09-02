<?php

namespace app\models;

use Yii;

class merge
{
	
public function getBooking()
	{
		$book1 = Booking::model()->findAll();
		$data1 = CHtml::listdata($book1, 'id');
		
		$book2 = Customer::model()->findAll();
		$data2 = CHtml::listdata($book2, 'id', 'First_Name', 'Last_Name');
		
		return array_merge($data1, $data2);
	}
}