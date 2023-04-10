<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "busket".
 *
 * @property int $id
 * @property int $id_user
 * @property int $id_product
 * @property float $sum
 * @property string $add_at
 *
 * @property Product $product
 * @property User $user
 */
class Busket extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'busket';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'id_product', 'sum'], 'required'],
            [['id_user', 'id_product'], 'integer'],
            [['sum'], 'number'],
            [['add_at'], 'safe'],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['id_user' => 'id']],
            [['id_product'], 'exist', 'skipOnError' => true, 'targetClass' => Product::class, 'targetAttribute' => ['id_product' => 'id']],
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
            'id_product' => 'Товар',
            'sum' => 'Стоимость',
            'add_at' => 'Дата добавления',
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
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'id_user']);
    }
}
