<?php

namespace app\controllers;

use Yii;
use app\models\ServiceBooking;
use app\models\ServiceBookingSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ServiceBookingController implements the CRUD actions for ServiceBooking model.
 */
class ServiceBookingController extends Controller
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
     * Lists all ServiceBooking models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ServiceBookingSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ServiceBooking model.
     * @param integer $id
     * @param integer $customer_id
     * @param integer $employee_id
     * @return mixed
     */
    public function actionView($id, $customer_id, $employee_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $customer_id, $employee_id),
        ]);
    }

    /**
     * Creates a new ServiceBooking model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ServiceBooking();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'customer_id' => $model->customer_id, 'employee_id' => $model->employee_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ServiceBooking model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $customer_id
     * @param integer $employee_id
     * @return mixed
     */
    public function actionUpdate($id, $customer_id, $employee_id)
    {
        $model = $this->findModel($id, $customer_id, $employee_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'customer_id' => $model->customer_id, 'employee_id' => $model->employee_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ServiceBooking model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $customer_id
     * @param integer $employee_id
     * @return mixed
     */
    public function actionDelete($id, $customer_id, $employee_id)
    {
        $this->findModel($id, $customer_id, $employee_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ServiceBooking model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $customer_id
     * @param integer $employee_id
     * @return ServiceBooking the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $customer_id, $employee_id)
    {
        if (($model = ServiceBooking::findOne(['id' => $id, 'customer_id' => $customer_id, 'employee_id' => $employee_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
