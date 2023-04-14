
<?php
use yii\helpers\Url;
use app\models\Product;

/** @var app\models\Product $model */
/** @var yii\web\View $this */

$this->title = 'AirWars';
?>
    <div style="">
        <h2 style="margin-top:50px; text-align:center;">Страйкбольный магазин AirWars- всё для страйкбола </h2>
 
    </div>
    <h2 style="text-align:center; margin-top:50px">Новинки</h2>
<div class="column_main" style=" display: grid;gap:20px; grid-template-columns: repeat(4, 300px); column-gap: 50px; justify-items : center;justify-content: left">
    <?php
        foreach($post as $posts){
            ?>
            <div class="main_screen"  style="margin-top:30px;box-shadow: 5px 5px 100px gray; border-color:grey; align-items:center; padding:25px; border-radius:20px" class="col-lg-3; ">
            <h2 style=" width:250px; font-size:24px;text-align:center; "><?php echo $posts->name ?></h2>

            <img class="" style="height:180px; width:250px; margin: 0, auto  " alt="Фото товара"  src="../uploads/<?php echo $posts->image ?>">

            <p style="text-align:center; margin-top:20px; font-size:18px; font-weight:700;"><?php echo $posts->price ?></p>

            <div class="buttons" style="display: flex; justify-content: space-between; height: 45px">
          <button>  <a style="text-decoration:none; color:black; font-size:18px; font-weight:700;" href="<?php echo Url::toRoute(['product/view', 'id'=> $posts->id]) ?>">Подробнее</a></button>

            <button type="button"  style="margin-bottom: 20px; margin-left:60px; font-size:18px; font-weight:700; height:45px"><a href="<?php echo Url::toRoute(['busket/add', 'id'=> $posts->id]) ?>"  style="text-decoration:none; color:black; text-align:center;">Купить</a></button>
            </div>
            </div>

        <?php } ?>
        </div>
        <h2 style="text-align:center; margin-top:50px">Привода</h2>
        <div class="column_main1" style=" display: grid;gap:20px; grid-template-columns: repeat(4, 300px); column-gap: 50px; justify-items : center;justify-content: left">
            <?php 
            foreach($item as $items){?>
            <div class="main_screen1"  style="margin-top:70px;box-shadow: 5px 5px 100px gray; border-color:grey; align-items:center; padding:25px; border-radius:20px" class="col-lg-3; ">
            <h2 style=" width:250px; font-size:24px;text-align:center; "><?php echo $items->name ?></h2>

            <img class="" style="height:180px; width:250px; margin: 0, auto  " alt="Фото товара"  src="../uploads/<?php echo $items->image ?>">

            <p style="text-align:center; margin-top:20px; font-size:18px; font-weight:700;"><?php echo $items->price ?></p>

            <div class="buttons" style="display: flex; justify-content: space-between; height: 45px">
          <button>  <a style="text-decoration:none; color:black; font-size:18px; font-weight:700;" href="<?php echo Url::toRoute(['product/view', 'id'=> $items->id]) ?>">Подробнее</a></button>

            <button type="button"  style="margin-bottom: 20px; margin-left:60px; font-size:18px; font-weight:700; height:45px"><a href="<?php echo Url::toRoute(['busket/add', 'id'=> $items->id]) ?>"  style="text-decoration:none; color:black; text-align:center;">Купить</a></button>
            </div>
            </div>
            <?php } ?>
            
</div>
    <h2 style="text-align:center; margin-top:50px">Шлема</h2>
        <div class="column_main1" style=" display: grid;gap:20px; grid-template-columns: repeat(4, 300px); column-gap: 50px; justify-items : center;justify-content: left">
            <?php 
            foreach($helmet as $items){?>
            <div class="main_screen1"  style="margin-top:70px;box-shadow: 5px 5px 100px gray; border-color:grey; align-items:center; padding:25px; border-radius:20px" class="col-lg-3; ">
            <h2 style=" width:250px; font-size:24px;text-align:center; "><?php echo $items->name ?></h2>

            <img class="" style="height:180px; width:250px; margin: 0, auto  " alt="Фото товара"  src="../uploads/<?php echo $items->image ?>">

            <p style="text-align:center; margin-top:20px; font-size:18px; font-weight:700;"><?php echo $items->price ?></p>

            <div class="buttons" style="display: flex; justify-content: space-between; height: 45px">
          <button>  <a style="text-decoration:none; color:black; font-size:18px; font-weight:700;" href="<?php echo Url::toRoute(['product/view', 'id'=> $items->id]) ?>">Подробнее</a></button>

            <button type="button"  style="margin-bottom: 20px; margin-left:60px; font-size:18px; font-weight:700; height:45px"><a href="<?php echo Url::toRoute(['busket/add', 'id'=> $items->id]) ?>"  style="text-decoration:none; color:black; text-align:center;">Купить</a></button>
            </div>
            </div>
            <?php } ?>
            </div>
            <h2 style="text-align:center; margin-top:50px">Прицелы</h2>
        <div class="column_main2" style=" display: grid;gap:20px; grid-template-columns: repeat(4, 300px); column-gap: 50px; justify-items : center;justify-content: left">
            <?php 
            foreach($scope as $items){?>
            <div class="main_screen1"  style="margin-top:70px;box-shadow: 5px 5px 100px gray; border-color:grey; align-items:center; padding:25px; border-radius:20px" class="col-lg-3; ">
            <h2 style=" width:250px; font-size:24px;text-align:center; "><?php echo $items->name ?></h2>

            <img class="" style="height:180px; width:250px; margin: 0, auto  " alt="Фото товара"  src="../uploads/<?php echo $items->image ?>">

            <p style="text-align:center; margin-top:20px; font-size:18px; font-weight:700;"><?php echo $items->price ?></p>

            <div class="buttons" style="display: flex; justify-content: space-between; height: 45px">
          <button>  <a style="text-decoration:none; color:black; font-size:18px; font-weight:700;" href="<?php echo Url::toRoute(['product/view', 'id'=> $items->id]) ?>">Подробнее</a></button>

            <button type="button"  style="margin-bottom: 20px; margin-left:60px; font-size:18px; font-weight:700; height:45px"><a href="<?php echo Url::toRoute(['busket/add', 'id'=> $items->id]) ?>"  style="text-decoration:none; color:black; text-align:center;">Купить</a></button>
            </div>
            </div>
            <?php } ?>
            </div>
            <h2 style="text-align:center; margin-top:50px">Камуфляж</h2>
        <div class="column_main2" style=" display: grid;gap:20px; grid-template-columns: repeat(4, 300px); column-gap: 50px; justify-items : center;justify-content: left">
            <?php 
            foreach($camouflage as $items){?>
            <div class="main_screen1"  style="margin-top:70px;box-shadow: 5px 5px 100px gray; border-color:grey; align-items:center; padding:25px; border-radius:20px" class="col-lg-3; ">
            <h2 style=" width:250px; font-size:24px;text-align:center; "><?php echo $items->name ?></h2>

            <img class="" style="height:180px; width:250px; margin: 0, auto  " alt="Фото товара"  src="../uploads/<?php echo $items->image ?>">

            <p style="text-align:center; margin-top:20px; font-size:18px; font-weight:700;"><?php echo $items->price ?></p>

            <div class="buttons" style="display: flex; justify-content: space-between; height: 45px">
          <button>  <a style="text-decoration:none; color:black; font-size:18px; font-weight:700;" href="<?php echo Url::toRoute(['product/view', 'id'=> $items->id]) ?>">Подробнее</a></button>

            <button type="button"  style="margin-bottom: 20px; margin-left:60px; font-size:18px; font-weight:700; height:45px"><a href="<?php echo Url::toRoute(['busket/add', 'id'=> $items->id]) ?>"  style="text-decoration:none; color:black; text-align:center;">Купить</a></button>
            </div>
            </div>
            <?php } ?>
            </div>
            <h2 style="text-align:center; margin-top:50px">Плитники</h2>
        <div class="column_main2" style=" display: grid;gap:20px; grid-template-columns: repeat(4, 300px); column-gap: 50px; justify-items : center;justify-content: left">
            <?php 
            foreach($playecarier as $items){?>
            <div class="main_screen1"  style="margin-top:70px;box-shadow: 5px 5px 100px gray; border-color:grey; align-items:center; padding:25px; border-radius:20px" class="col-lg-3; ">
            <h2 style=" width:250px; font-size:24px;text-align:center; "><?php echo $items->name ?></h2>

            <img class="" style="height:180px; width:250px; margin: 0, auto  " alt="Фото товара"  src="../uploads/<?php echo $items->image ?>">

            <p style="text-align:center; margin-top:20px; font-size:18px; font-weight:700;"><?php echo $items->price ?></p>

            <div class="buttons" style="display: flex; justify-content: space-between; height: 45px">
          <button>  <a style="text-decoration:none; color:black; font-size:18px; font-weight:700;" href="<?php echo Url::toRoute(['product/view', 'id'=> $items->id]) ?>">Подробнее</a></button>

            <button type="button"  style="margin-bottom: 20px; margin-left:60px; font-size:18px; font-weight:700; height:45px"><a href="<?php echo Url::toRoute(['busket/add', 'id'=> $items->id]) ?>"  style="text-decoration:none; color:black; text-align:center;">Купить</a></button>
            </div>
            </div>
            <?php } ?>
            </div>