<?php
/**
 * Created by PhpStorm.
 * User: GABRIELYAN
 * Date: 04.07.2020
 * Time: 18:44
 */

namespace application\models;

use application\components\Db;
use application\components\Validator;

class LoginForm
{
    public $username;
    public $password;

    public function __construct($post)
    {
        $this->username = $post['username'];
        $this->password = $post['password'];
    }

    public function rules()
    {
        return [
            'required' => [
                'username' => $this->username,
                'password' => $this->password,
            ],
            'password' => [
                'password' => $this->password,
            ]
        ];
    }

    public function validate(){
        $validator = new Validator($this->rules());

        if (!empty($validator->validate())) {
            return $validator->validate();
        }
        return false;
    }

    public static function checkUserData($username,$password){
        $db = Db::getConnection();

        $sql = 'SELECT * FROM users WHERE username = :username AND password = :password';

        $result = $db->prepare($sql);
        $result->bindParam(':username', $username, \PDO::PARAM_STR);
        $result->bindParam(':password', $password, \PDO::PARAM_INT);
        $result->execute();

        $user = $result->fetch();

        if ($user) {

            $user_id = $user['id'];

            return $user_id;
        }

        return false;
    }

    public function login(){
        if (self::checkUserData($this->username,$this->password)){
            return self::checkUserData($this->username,$this->password);
        }
        return false;
    }






}