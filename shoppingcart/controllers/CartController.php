<?php

namespace app\controllers;

use Yii;
use app\models\CartProducts;
use app\models\CartProductsSearch;
use app\models\DiscountForm;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CartController implements the CRUD actions for CartProducts model.
 */
class CartController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all CartProducts models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new CartProductsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionDiscount()
    {
        $model = new DiscountForm();
        Yii::debug("postData: " . var_export(Yii::$app->request->post()));
        Yii::debug("getData: " . var_export(Yii::$app->request->get()));
        if($model->load(Yii::$app->request->post()) && $model->validate())
        {
            return $this->render('summary', [
                'total' => $this->sumTotal(),
                'discountTotal' => $this->sumDiscountTotal($model->discount_per, $model->discount_amount)
            ]);
        }
        $model->discount_per = 0;
        $model->discount_amount= 0;
        return $this->render('discount', [
            'model' => $model,
        ]);
    }    

    /**
     * Displays a single CartProducts model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new CartProducts model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new CartProducts();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }
        $model->created_at = date("Y-m-d H:i:s");

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing CartProducts model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        $model->updated_at = date("Y-m-d H:i:s");

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CartProducts model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CartProducts model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return CartProducts the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = CartProducts::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
