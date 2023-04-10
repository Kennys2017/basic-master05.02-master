<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property int $id_user
 * @property int $id_product
 * @property int $id_status
 * @property float $sum
 * @property string $date
 *
 * @property Product $product
 * @property Status $status
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'id_product', 'id_status', 'sum'], 'required'],
            [['id_user', 'id_product', 'id_status'], 'integer'],
            [['sum'], 'number'],
            [['date'], 'safe'],
            [['id_product'], 'exist', 'skipOnError' => true, 'targetClass' => Product::class, 'targetAttribute' => ['id_product' => 'id']],
            [['id_status'], 'exist', 'skipOnError' => true, 'targetClass' => Status::class, 'targetAttribute' => ['id_status' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'Id User',
            'id_product' => 'Товары',
            'id_status' => 'Статус',
            'sum' => 'Сумма',
            'date' => 'Дата',
        ];
    }

    /**
     * Gets query for [[Product]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::class, ['id' => 'id_product']);
    }

    /**
     * Gets query for [[Status]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(Status::class, ['id' => 'id_status']);
    }
}
