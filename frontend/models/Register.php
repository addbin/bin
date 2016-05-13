<?php
namespace frontend\models;

use frontend\models\User;
use yii\base\Model;
use Yii;

//session_start();
/**
 * Signup form
 */
class Register extends Model
{
    public $username;
    public $password;
    public $confirmpassword;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            //['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            ['username', 'validateUsername'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],

            ['confirmpassword', 'required'],
            ['confirmpassword', 'string', 'min' => 6],

        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function register()
    {

        if (!$this->validate()) {
            return null;
        }

        if ($this->password != $this->confirmpassword) {
            $this->addError('confirmpassword', 'password does not match');
            return null;
        }
        $user = new User();
        $user->username = $this->username;
        $user->password = md5($this->password);
        return $user->save() ? $user : null;
    }

    public function validateUsername()
    {
        $user = User::findByUsername($this->username);
        if ($user) {
            $this->addError('username', 'This username already exists.');
            return null;
        }
        else return true;

    }



}
