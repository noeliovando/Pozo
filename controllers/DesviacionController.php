<?php

namespace app\controllers;

use Yii;
use app\models\Desviacion;
use app\models\DesviacionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DesviacionController implements the CRUD actions for Desviacion model.
 */
class DesviacionController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Desviacion models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DesviacionSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Desviacion model.
     * @param string $uwi
     * @param string $md
     * @return mixed
     */
    public function actionView($uwi, $md)
    {
        return $this->render('view', [
            'model' => $this->findModel($uwi, $md),
        ]);
    }

    /**
     * Creates a new Desviacion model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Desviacion();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'uwi' => $model->uwi, 'md' => $model->md]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Desviacion model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $uwi
     * @param string $md
     * @return mixed
     */
    public function actionUpdate($uwi, $md)
    {
        $model = $this->findModel($uwi, $md);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'uwi' => $model->uwi, 'md' => $model->md]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Desviacion model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $uwi
     * @param string $md
     * @return mixed
     */
    public function actionDelete($uwi, $md)
    {
        $this->findModel($uwi, $md)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Desviacion model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $uwi
     * @param string $md
     * @return Desviacion the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($uwi, $md)
    {
        if (($model = Desviacion::findOne(['uwi' => $uwi, 'md' => $md])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
