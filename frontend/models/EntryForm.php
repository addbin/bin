<?php
/**
 * Created by PhpStorm.
 * User: shareworks
 * Date: 16/5/4
 * Time: 下午5:06
 */
namespace app\models;

use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}

