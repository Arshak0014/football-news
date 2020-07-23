<?php

namespace application\controllers;

use application\base\BaseController;

use application\base\View;
use application\components\Auth;
use application\models\LoginForm;

class UserController extends BaseController
{
    public function actionLogin()
    {
        if (!Auth::isGuest()){
            View::redirect('/admin');
        }

        $title = 'Login';

        if (!empty($_POST) && isset($_POST['submit'])){
            $model = new LoginForm($_POST);
            $user_id = $model->login();
            $errors = $model->validate();

            if (!empty($errors)) {
                $this->view->render('user/login',[
                    'errors' => $errors
                ]);
            }

            if ($model->login()){

                Auth::auth($user_id);
                View::redirect('/admin');
            }else{
                $_SESSION['login_err'] = 'Username or Password is not correct.';
            }
        }

        $this->view->setTitle($title);
        $this->view->render('user/login');

        return true;
    }

    public function actionLogout(){
        Auth::logout();
    }

}