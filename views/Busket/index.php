<?php

use app\models\Busket;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\controllers\Product;

/** @var yii\web\View $this */
/** @var app\models\BusketSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Корзина';
?>
<div class="busket-index">

    <h1><?= Html::encode($this->title) ?></h1>

    

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,

        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            //'id_user',
            [
                'attribute' => 'id_product',
                'value' => 'product.name',
            ],
            'sum',
            //'add_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Busket $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>
    <?php
    $amount = 0;
    $cart = Busket::find()->all(); 
     foreach($cart as $items){
         $amount += $items->sum; 
    ?>
   
   <?php } ?>
   <p style="font-size:22px; font-weight:700; margin-left:00px"> 
      Сумма заказа:  <?php echo $amount ?>
    </p>
 <button class="btn btn-success">Оформить заказ</botton>

</div>
