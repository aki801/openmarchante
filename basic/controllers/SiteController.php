<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\EntryForm;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
    public function actionSay($message = 'Hello')
    {
        return $this->render('say', ['message' => $message]);
    }
    public function actionDevoluciones()
    {
        return $this->render('devoluciones');
    }
    public function actionEntry()
    {
        $model = new EntryForm();

        if($model->load(Yii::$app->request->post()) &&$model->validate()) {
            //valid data received in $model

            //do something meaningful here about $model ..

            return $this->render('entry-comfirm', ['model'=>$model]);
        }else{
            //either the page in initially displayed or there is some validation error
            return $this->render('entry',['model'=>$model]);
        }
    }
     public function actionUsuario()// paginas de barsup
    {
        return $this->render('user');
    }
     public function actionDeseos()// paginas de barsup
    {
        return $this->render('deseos');
    }
     public function actionCarrito()// paginas de barsup
    {
        return $this->render('carrito');
    }
     public function actionbicicletas()// paginas de barsup
    {
        return $this->render('bicicletas');
    }
     public function actionCascos()// paginas de barsup
    {
        return $this->render('cascos');
    }
     public function actionRefacciones()// paginas de barsup
    {
        return $this->render('refacciones');
    }
     public function actionAccesorios()// paginas de barsup
    {
        return $this->render('accesorios');
    }
}
