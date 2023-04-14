<?php
use app\models\Category;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\CategorySearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Административная панель';
?>
<div class="category-index" >

    <h1><?= Html::encode($this->title) ?></h1>
    <div style="display:flex; flex-direction:column; width:300px;">
   <button  class="btn btn-success" style=" margin-top:20px"> <p >
        <?= Html::a('Управление пользователями', ['/user'],  ['style' => 'text-decoration:none; color:white; font-weight:450']) ?>
    </p>
    </button>
    <button  class="btn btn-success" style=" margin-top:20px"> <p>
        <?= Html::a('Управление товарами', ['/product'],  ['style' => 'text-decoration:none; color:white; font-weight:450']) ?>
    </p>
        </button>
        <button  class="btn btn-success" style=" margin-top:20px"> <p>
        <?= Html::a('Управление категориями', ['/category'],  ['style' => 'text-decoration:none; color:white; font-weight:450']) ?>
    </p>
    </button>
    <button  class="btn btn-success" style=" margin-top:20px"> <p>
        <?= Html::a('Управление заказами', ['/order'],  ['style' => 'text-decoration:none; color:white; font-weight:450']) ?>
    </p>
</button>
    <div>
</div>
