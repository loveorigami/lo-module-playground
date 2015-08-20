<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\modules\catalog\models\CatalogSection $model
 */

//$this->title = \Yii::t($this->context->tFile, 'Update Catalog Section') . ': ' . $model->getItemLabel();
//$this->params['breadcrumbs'][] = ['label' => \Yii::t($this->context->tFile, 'Catalog Sections'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
//$this->params['breadcrumbs'][] = \Yii::t('core', 'Update');
?>
<div class="menu-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

