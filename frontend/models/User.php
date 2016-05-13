<?php
/**
 * Created by PhpStorm.
 * User: shareworks
 * Date: 16/5/5
 * Time: 下午5:04
 */

namespace frontend\models;

use yii;
use yii\db\ActiveRecord;

class User extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }
    /**
     * @inheritdoc
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            [['username', 'password'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',

        ];
    }

    public function beforeSave() {
        $pass = md5($this->password);
        $this->password = $pass;

        return true;
    }

}