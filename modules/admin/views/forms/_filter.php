<?php
use lo\core\admin\widgets\ExtFilter;

/**
 * @var yii\web\View $this
 * @var app\modules\catalog\models\CatalogSection $model
 */

echo ExtFilter::widget(["model" => $model]);