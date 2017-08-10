<?php
namespace app\controllers;
use Yii;
use app\models\Trivia;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\db\Expression;
use yii\data\Pagination;
class TriviaController extends Controller
{
   
    public function actionIndex()
    {
    	
    	 $query = trivia::find(); // Fetching data as array
    	 $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
        $trivia = $query->orderBy('trivia')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
       
         
shuffle($trivia);
        return $this->render('index', ['trivia'=>$trivia,'pagination'=>$pagination,
        	]);
        
    }
}