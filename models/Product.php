<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property int $id_category
 * @property string $name
 * @property string $image
 * @property string $created_at
 * @property float $price
 *
 * @property Busket[] $buskets
 * @property Category $category
 * @property Order[] $orders
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_category', 'name', 'image', 'price'], 'required'],
            [['id_category'], 'integer'],
            [['created_at'], 'safe'],
            [['price'], 'number'],
            [['name', 'image'], 'string', 'max' => 255],
            [['id_category'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['id_category' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_category' => 'Категория',
            'name' => 'Название',
            'image' => 'Изображение',
            'created_at' => 'Created At',
            'price' => 'Цена',
        ];
    }

    /**
     * Gets query for [[Buskets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBuskets()
    {
        return $this->hasMany(Busket::class, ['id_product' => 'id']);
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'id_category']);
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::class, ['id_product' => 'id']);
    }
}
