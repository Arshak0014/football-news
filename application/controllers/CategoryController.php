<?php
/**
 * Created by PhpStorm.
 * User: GABRIELYAN
 * Date: 22.07.2020
 * Time: 15:23
 */

namespace application\controllers;

use application\base\BaseController;
use application\models\Post;
use application\models\Sport;

class CategoryController extends BaseController
{
    public function actionIndex($id){

        $sport = Sport::getSportBySlug($id);
        $sport_id = $sport['id'];

        $posts = Post::getPostsByCategory($sport_id);

        $this->view->setTitle($sport['sport_name']);
        $this->view->render('category/index',[
            'sport' => $sport,
            'posts' => $posts,
        ]);
        return true;
    }

}