<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property int $id_role
 * @property string $login
 * @property string $password
 * @property string $email
 * @property Busket[] $buskets
 * @property Role $role
 */
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_role' => 'Id Role',
            'login' => 'Логин',
            'password' => 'Пароль',
            'passwordConfirm' => 'Подтверждение пароля',
            'email' => 'Email',
            'agree' => 'Даю согласие на обработку данных',
        ];
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
  

    /**
     * Gets query for [[Buskets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBuskets()
    {
        return $this->hasMany(Busket::class, ['id_user' => 'id']);
    }


    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::class, ['id_user' => 'id']);
    }


    /**
     * Gets query for [[Role]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRole()
    {
        return $this->hasOne(Role::class, ['id' => 'id_role']);
    }
    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {

    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return self::find()->where(['login' => $username])->one();
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {

    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}
