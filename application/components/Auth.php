<?php

namespace application\components;

use application\base\View;

class Auth
{
    public static function auth($userId)
    {
        $_SESSION['user'] = $userId;
    }

    public static function isGuest()
    {
        if (isset($_SESSION['user'])) {
            return false;
        }
        return true;
    }

    public static function logout()
    {
        session_unset();
        session_destroy();
        View::redirect('/login');
    }

}