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
class ProductCreateForm extends Product
{
    /**
     * {@inheritdoc}
     */
  

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
            [['image'], 'file', 'extensions' =>'png, jpg, jpeg, bmp', 'maxSize'=> 10*1024*1024, 'message' =>'Неверное расширение файла, максимальный размер 10мб'],
            [['name'], 'string', 'max' => 255],
            [['id_category'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['id_category' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
   
}
