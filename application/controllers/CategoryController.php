<?php
/**
 * Created by PhpStorm.
 * User: GABRIELYAN
 * Date: 22.07.2020
 * Time: 15:23
 */

namespace application\controllers;

use application\base\BaseController;
use application\base\BaseView;
use application\base\View;
use application\components\Auth;
use application\components\Router;
use application\models\Country;
use application\models\Post;
use application\models\Sport;

class CategoryController extends BaseController
{
    public function actionIndex($slug,$page){

        $sport = Sport::getSportBySlug($slug);
        $sport_id = $sport['id'];

        $posts = Post::getPostsByCategory($sport_id,$page);

        if (count($posts) > 250){
            Post::deleteLastItems($sport_id);
        }

        if ($sport['slug'] == $slug && ctype_digit($page)){
            $this->view->setTitle('FreeKick.am - '.$sport['sport_name']);
            $this->view->render('category/index',[
                'sport' => $sport,
                'posts' => $posts,
            ]);
            return true;
        }else{
            View::redirect('/not_found');
        }
        return false;
    }

    public function actionCountry($sport_slug,$country_slug,$page){

        $sport = Sport::getSportBySlug($sport_slug);

        $country = Country::getCountryBySlug($country_slug);
        $country_id = $country['id'];
        $sport_id = $sport['id'];

        $posts = Post::getPostsByCountry($country_id,$sport_id,$page);

        if ($country['slug'] == $country_slug && $sport['slug'] == $sport_slug){
            $this->view->setTitle('FreeKick.am - '.$country['country_name']);
            $this->view->render('category/country',[
                'posts' => $posts,
                'sport' => $sport,
                'country' => $country
            ]);
            return true;
        }else{
            BaseView::errorCode('404');
        }
        return false;
    }


}