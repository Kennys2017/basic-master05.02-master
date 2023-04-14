<?php
use yii\helpers\Url;
use app\models\Product;
use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Product $model */

$this->title = $model->name;
?>
<div class="product-view" style="box-shadow: 5px 5px 100px gray; border-color:grey; align-items:center; padding:25px; border-radius:20px; margin-top: 50px">
<h1 style="margin-top:15px; text-align:center"><?= Html::encode($this->title) ?></h1>
    <div class="product_main_card" style="display:flex; justify-content:space-between; width:1000px">
    <img style="width:300px; height:300px" alt="Фото товара"  src="../uploads/<?php echo $model->image ?>">
    <div class="product_text" style="margin-top:60px; width:700px; text-align:center">
    <div class="description" style="display: flex; justify-content:space-between">
    <p style="font-size:18px;">Модель шлема Ops-Core FAST Carbon Simple от фирмы FMA, Гонконг.
Колокол шлема выполнен из нейлона. Подвесная система типа X-nape (с Х-образной подушкой на затылке) регулируется в широки пределах.
К внутренней части шлема при помощи липучки "велкро" крепятся мягкий аммортизирующие подушки, которые можно расположить так, как удобно пользователю.
На шлеме установлены: крепление для прибора ночного видения, направляющие для установки дополнительного оборудования (нашлемного фонаря, экшн-камеры и т.д.) и панели с липучкой "велкро"
Подвесная система X-nape полностью регулируется и позволяет подогнать шлем под практически любого пользователя.</p>
</div>
    <p style="text-align:center; font-size:18px; font-weight:700;">Цена: <?php echo $model->price ?> Рублей</p>
    <button type="button"  style="margin-bottom: 20px; margin-left:0px; font-size:18px; font-weight:700; height:45px"><a href="<?php echo Url::toRoute(['busket/add', 'id'=> $model->id]) ?>"  style="text-decoration:none; color:black; text-align:center;">Купить</a></button>
</div>
</div>
</div>
