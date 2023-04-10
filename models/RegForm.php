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
class RegForm extends User
{

    public $passwordConfirm;
    public $agree;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['login', 'password', 'email', 'passwordConfirm', 'agree'], 'required' , 'message' =>'Поле обязательно для заполнения'],
            ['login', 'match', 'pattern' => '/^[a-zA-Z]{1,}$/u', 'message'=>'Только латинские буквы'],
            ['login', 'unique', 'message'=>'Такой логин уже существует'],
            ['email','email', 'message'=>'Некорректный email'],
            ['passwordConfirm', 'compare', 'compareAttribute' => 'password', 'message' => 'Пароли должны совпадать'],
            ['agree', 'boolean'],
            ['agree', 'compare', 'compareValue' => true, 'message'=> 'Необходимо согласиться'],
            [['login', 'password', 'email'], 'string', 'max' => 255],
            [['id_role'], 'exist', 'skipOnError' => true, 'targetClass' => Role::class, 'targetAttribute' => ['id_role' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
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

   
}
