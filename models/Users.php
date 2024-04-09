<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property string $email
 * @property string $username
 * @property string $password
 * @property int $id
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email', 'username', 'password'], 'required'],
            [['email'], 'string', 'max' => 59],
            [['username', 'password'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'email' => 'Email',
            'username' => 'Username',
            'password' => 'Password',
            'id' => 'ID',
        ];
    }
}
