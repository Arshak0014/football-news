<?php
/**
 * Created by PhpStorm.
 * User: GABRIELYAN
 * Date: 14.07.2020
 * Time: 13:58
 */

namespace application\controllers\admin;


use application\base\AdminBaseController;
use application\base\View;
use application\components\Auth;

class DashboardController extends AdminBaseController
{
    public function actionIndex(){

        if (Auth::isGuest()){
            View::redirect('/not_found');
        }

        $this->view->setTitle('Dashboard');
        $this->view->render('admin/dashboard/index');
        return true;
    }

}