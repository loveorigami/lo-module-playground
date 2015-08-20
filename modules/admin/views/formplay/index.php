<?php
use lo\core\admin\widgets\CrudLinks;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\Breadcrumbs;

/**
 * @var yii\web\View $this
 * @var string $html html код меню
 */

$this->title = \Yii::t('common', 'Menu');
$this->params['breadcrumbs'][]=$this->title;

/*$data = $searchModel->getBreadCrumbsItems($parent_id, function ($model) {
    return ["/" . Yii::$app->controller->route, "parent_id" => $model->id];
});
$home =  [[
    "label" => \Yii::t('common', 'Menu'),
    "url" => ["/" . Yii::$app->controller->route]
]];
$this->params['breadcrumbs'] = ArrayHelper::merge($home, $data);*/


?>

<?= CrudLinks::widget(["action" => CrudLinks::CRUD_LIST, "model" => $searchModel, "urlParams" => ["parent_id" => $parent_id]]) ?>
<?= $this->render('_filter', ['model' => $searchModel]); ?>


<?= Breadcrumbs::widget([
    'homeLink' => [
        "label" => \Yii::t('common', 'Menu'),
        "url" => ["/" . Yii::$app->controller->route]
    ],
    'links' => $searchModel->getBreadCrumbsItems($parent_id, function ($model) {
        return ["/" . Yii::$app->controller->route, "parent_id" => $model->id];
    }),
]) ?>

<?= $this->render('_grid', ['dataProvider' => $dataProvider, "searchModel" => $searchModel]); ?>
