<?php
namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * Login form
 */
class Login extends Model
{
    public $username;
    public $password;

    /**
     * @inheritdoc
     */

    public function attributeLabels()
    {
        return [
            'username' => 'username',
            'password' => 'Password',
        ];
    }
    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password'], 'required'],
            ['password', 'validatePassword'],
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */

    public function validatePassword()
    {
        $user = User::findByUsername($this->username);
        $this->password = md5(trim($this->password));
        if (!$user) {

            $this->addError('username', 'Incorrect username or password.');
            return null;
        } else if ($user->password == $this->password) {
            session_start();
            $_SESSION['username']=$this->username;

            return true;
        } else {
            $this->addError('password', 'Incorrect username or password.');
            return null;
        }
    }
}