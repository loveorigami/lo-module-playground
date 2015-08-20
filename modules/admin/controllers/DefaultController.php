<?php

namespace lo\modules\playground\modules\admin\controllers;;

use Yii;
use yii\helpers\VarDumper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LogController implements the CRUD actions for SystemLog model.
 */
class DefaultController extends Controller
{
    /**
     * Lists all SystemLog models.
     * @return mixed
     */
    public function actionIndex()
    {

        return $this->render('index');
    }

    /**
     * Lists all SystemLog models.
     * @return mixed
     */
    public function actionAjaxq()
    {
        return $this->render('ajaxq');
    }

    /**
     * Lists all SystemLog models.
     * @return mixed
     */
    public function actionGetTime()
    {
        $post = \Yii::$app->request->post('dataq');

        // header('Content-type: application/json');
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $item['res'] = $post['id'].' - It is ok!';
        $res = print_r($item, true);
        echo json_encode($res);
    }
}
