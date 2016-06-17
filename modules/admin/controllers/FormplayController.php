<?php

namespace lo\modules\playground\modules\admin\controllers;

use lo\modules\playground\models\Formplay;
use lo\core\actions\crud;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;

/**
 * PermissionController implements the CRUD actions for Permission model.
 */
class FormplayController extends Controller
{
    /**
     * Поведения
     * @return array
     */

    public function behaviors()
    {
        $beh = parent::behaviors();

        $beh['verbs'] = [
            'class' => VerbFilter::class,
            'actions' => [
                'delete' => ['post'],
                'groupdelete' => ['post'],
            ],
        ];

        return $beh;
    }

    /**
     * Действия
     * @return array
     */
    public function actions()
    {

        $class = Formplay::class;

        return [

            'index' => [
                'class' => crud\TIndex::class,
                'modelClass' => $class,
            ],

            'create' => [
                'class' => crud\TCreate::class,
                'modelClass' => $class,
            ],

            'update' => [
                'class' => crud\TUpdate::class,
                'modelClass' => $class,
            ],

            'view' => [
                'class' => crud\View::class,
                'modelClass' => $class,
            ],

            'delete' => [
                'class' => crud\TDelete::class,
                'modelClass' => $class,
            ],

            'groupdelete' => [
                'class' => crud\TGroupDelete::class,
                'modelClass' => $class,
            ],

            'up' => [
                'class' => crud\TUp::class,
                'modelClass' => $class,
            ],

            'down' => [
                'class' => crud\TDown::class,
                'modelClass' => $class,
            ],

            'replace' => [
                'class' => crud\TReplace::class,
                'modelClass' => $class,
            ],

            'editable' => [
                'class' => crud\XEditable::class,
                'modelClass' => $class,
            ],

        ];

    }

}