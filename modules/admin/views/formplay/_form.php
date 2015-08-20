<?php
use lo\core\admin\widgets\Form;

/**
 * @var app\modules\catalog\models\CatalogSection $model модель
 */

echo Form::widget(["model" => $model]);