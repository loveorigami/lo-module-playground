<?php
/**
 * @var yii\web\View $this
 */

use lo\core\widgets\admin\Grid;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\modules\catalog\models\CatalogSection $searchModel
 */

echo Grid::widget([
    'dataProvider' => $dataProvider,
    'model' => $searchModel,
    'tree' => true,
/*    'userColumns' => [[
        'class' => \yii\grid\DataColumn::className(),
        'header' => Yii::t('common', 'Child'),
        'value' => function ($model, $index, $widget) {
            return count($model->children(1)->all());
        }
    ]],*/
]);