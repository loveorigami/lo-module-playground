<?php
use lo\core\admin\widgets\CrudLinks;
use lo\core\admin\widgets\Detail;
use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\modules\catalog\models\CatalogSection $model
 */

$this->title = $model->getItemLabel();
//$this->params['breadcrumbs'][] = ['label' => \Yii::t($this->context->tFile, 'Catalog Sections'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-view">

        <?= CrudLinks::widget(["action" => CrudLinks::CRUD_VIEW, "model" => $model]) ?>

    <?= Detail::widget([
        'model' => $model,
    ]) ?>

</div>