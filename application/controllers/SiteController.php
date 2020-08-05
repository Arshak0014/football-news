<?php

namespace application\controllers;
use application\base\BaseController;
use application\base\BaseView;
use application\models\Country;
use application\models\Post;
use application\models\Sport;

/**
 * Created by PhpStorm.
 * User: GABRIELYAN
 * Date: 13.07.2020
 * Time: 16:40
 */

class SiteController extends BaseController
{
    public function actionIndex(){

        $where_banner_post = 'WHERE is_for_banner = 1';
        $where_armenian_post = 'WHERE is_armenian_news = 1';
        $where_football_news = 'WHERE sport_id = 1 AND is_for_banner = 0';
        $where_tennis_news = 'WHERE sport_id = 7 AND is_for_banner = 0';
        $where_basketball_news = 'WHERE sport_id = 2 AND is_for_banner = 0';
        $where_other_news = 'WHERE sport_id = 8 AND is_for_banner = 0';

        $bannerPosts = Post::getPosts(5,$where_banner_post);
        $armenianNews = Post::getPosts(5,$where_armenian_post);
        $footballNews = Post::getPosts(5,$where_football_news);
        $tennisNews = Post::getPosts(5,$where_tennis_news);
        $basketballNews = Post::getPosts(5,$where_basketball_news);
        $otherNews = Post::getPosts(5,$where_other_news);

        $countriesLinks = Country::getCountries();


        $this->view->setTitle('FreeKick.am - Գլխավոր');
        $this->view->render('site/index',[
            'bannerPosts' => $bannerPosts,
            'armenianNews' => $armenianNews,
            'footballNews' => $footballNews,
            'tennisNews' => $tennisNews,
            'basketballNews' => $basketballNews,
            'otherNews' => $otherNews,

            'countriesLinks' => $countriesLinks,
        ]);

        return true;
    }

    public function actionView($slug){

        $post = Post::getPostBySlug($slug);

        $relatedPosts = Post::getPosts('6');

        $sport = array();

        foreach (Sport::getSports() as $sport_name){
            if ($post['sport_id'] == $sport_name['id']){
                array_push($sport,$sport_name);
            }
        }


        if ($post && $post['slug'] == $slug){

            $this->view->setTitle($post['title']);
            $this->view->render('site/view',[
                'post' => $post,
                'sport' => $sport,
                'relatedPosts' => $relatedPosts,
            ]);
            return true;
        }else{
            BaseView::errorCode('404');
        }
        return false;

    }




}