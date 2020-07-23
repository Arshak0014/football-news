<?php
/**
 * Created by PhpStorm.
 * User: GABRIELYAN
 * Date: 22.07.2020
 * Time: 15:23
 */

namespace application\controllers;

use application\base\BaseController;
use application\models\Sport;

class CategoryController extends BaseController
{
    public function actionIndex($id){

        $sport = Sport::getSportBySlug($id);
        debug($sport);



        $this->view->setTitle($sport['sport_name']);
        $this->view->render('category/index');
        return true;
    }

}