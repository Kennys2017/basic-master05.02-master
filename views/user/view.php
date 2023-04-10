<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\User $model */

$this->title = 'Личный кабинет';
\yii\web\YiiAsset::register($this);
?>
<div class="user-view">
    
    <h1><?= Html::encode($this->title) ?></h1>
    <img height='150px' src="../avatar.jpg" alt="Аватар пользователя">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            //'id_role',
            'login',
            [
                'attribute' => 'password',
                'value' => '******',
            ],
            'email:email',
        ],
    ]) ?>

</div>
