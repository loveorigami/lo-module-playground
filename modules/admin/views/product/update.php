<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Article */

$this->title = 'Article';
$this->params['breadcrumbs'][] = ['label' => Yii::t('common', 'Articles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('common', 'Update');
?>
<div class="article-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
