<?php

namespace app\controllers;

use Yii;
use app\models\Booking_Details;
use app\models\Booking_DetailsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * Booking_DetailsController implements the CRUD actions for Booking_Details model.
 */
class Booking_DetailsController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Booking_Details models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Booking_DetailsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Booking_Details model.
     * @param integer $id
     * @param integer $Booking_id
     * @param integer $employee_id
     * @param integer $services_ID
     * @return mixed
     */
    public function actionView($id, $Booking_id, $employee_id, $services_ID)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $Booking_id, $employee_id, $services_ID),
        ]);
    }

    /**
     * Creates a new Booking_Details model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Booking_Details();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'Booking_id' => $model->Booking_id, 'employee_id' => $model->employee_id, 'services_ID' => $model->services_ID]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Booking_Details model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $Booking_id
     * @param integer $employee_id
     * @param integer $services_ID
     * @return mixed
     */
    public function actionUpdate($id, $Booking_id, $employee_id, $services_ID)
    {
        $model = $this->findModel($id, $Booking_id, $employee_id, $services_ID);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'Booking_id' => $model->Booking_id, 'employee_id' => $model->employee_id, 'services_ID' => $model->services_ID]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Booking_Details model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $Booking_id
     * @param integer $employee_id
     * @param integer $services_ID
     * @return mixed
     */
    public function actionDelete($id, $Booking_id, $employee_id, $services_ID)
    {
        $this->findModel($id, $Booking_id, $employee_id, $services_ID)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Booking_Details model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $Booking_id
     * @param integer $employee_id
     * @param integer $services_ID
     * @return Booking_Details the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $Booking_id, $employee_id, $services_ID)
    {
        if (($model = Booking_Details::findOne(['id' => $id, 'Booking_id' => $Booking_id, 'employee_id' => $employee_id, 'services_ID' => $services_ID])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
