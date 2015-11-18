<?php
use yii\helpers\Html;
use yii\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel mirocow\eav\models\EavAttributeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'Product';
$this->params['breadcrumbs'][] = ['label' => 'Product', 'url' => ['/product']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Eav Attribute', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'name',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>