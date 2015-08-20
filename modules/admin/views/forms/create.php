<?php
use yii\helpers\Html;

/**
 * @var \yii\web\View $this
 * @var app\modules\catalog\models\CatalogSection $model
 */

//$this->title = \Yii::t($this->context->tFile, 'Create Catalog Section');
//$this->params['breadcrumbs'][] = ['label' => \Yii::t($this->context->tFile, 'Catalog Sections'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
