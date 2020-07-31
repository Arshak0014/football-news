<?php
/**
 * Created by PhpStorm.
 * User: GABRIELYAN
 * Date: 22.07.2020
 * Time: 15:23
 */

namespace application\controllers;

use application\base\BaseController;
use application\components\Router;
use application\models\Country;
use application\models\Post;
use application\models\Sport;

class CategoryController extends BaseController
{
    public function actionIndex($slug){

        $sport = Sport::getSportBySlug($slug);
        $sport_id = $sport['id'];

        $posts = Post::getPostsByCategory($sport_id);
        $page = Router::getSegment(3);

        if (count($posts) > 250){
            Post::deleteLastItems($sport_id);
        }

        if ($sport['slug'] == $slug && preg_match('/^[0-9]+$/', $page)){
            $this->view->setTitle($sport['sport_name']);
            $this->view->render('category/index',[
                'sport' => $sport,
                'posts' => $posts,
            ]);
            return true;
        }
        return false;
    }

    public function actionCountry($sport_slug,$country_slug){
        $sport = Sport::getSportBySlug($sport_slug);
        $country = Country::getCountryBySlug($country_slug);

        $posts = Post::getPostsByCountry($country);

        $this->view->render('category/country');
        return true;
    }


}