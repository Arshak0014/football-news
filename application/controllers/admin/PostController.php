<?php
/**
 * Created by PhpStorm.
 * User: GABRIELYAN
 * Date: 14.07.2020
 * Time: 13:37
 */

namespace application\controllers\admin;
use application\base\AdminBaseController;
use application\base\View;
use application\components\Auth;
use application\models\Country;
use application\models\Post;
use application\models\Sport;


class PostController extends AdminBaseController
{
    public function actionIndex(){
        if (Auth::isGuest()){
            View::redirect('/v');
        }

        $posts = Post::getPosts();

        $this->view->setTitle('Posts');
        $this->view->render('admin/post/index',[
            'posts' => $posts
        ]);
        return true;
    }

    public function actionCreate(){
        if (Auth::isGuest()){
            View::redirect('/not_found');
        }

        $sports = Sport::getSports();
        $countries = Country::getCountries();

        if (!empty($_POST) && isset($_POST['submit'])){
            $post_model = new Post($_POST);
            $validate = $post_model->validate();

            if (!empty($validate)){
                $this->view->setTitle('Create Posts');
                $this->view->render('admin/post/create',[
                    'validate' => $validate,
                    'sports' => $sports,
                    'countries' => $countries
                ]);
                return true;
            }

            if ($post_model->createPost()){
                View::redirect('/admin/post');
            }
        }

        $this->view->setTitle('Create Posts');
        $this->view->render('admin/post/create',[
            'sports' => $sports,
            'countries' => $countries
        ]);

        return true;
    }

    public function actionUpdate($id){
        if (Auth::isGuest()){
            View::redirect('/not_found');
        }

        $post = Post::getPostById($id);
        $sports = Sport::getSports();
        $countries = Country::getCountries();

        if (!empty($_POST) && isset($_POST['submit'])){
            $post_model = new Post($_POST);
            $validate = $post_model->validate();

            if (!empty($validate)){
                $this->view->setTitle('Update Post');
                $this->view->render('admin/post/update',[
                    'validate' => $validate,
                    'sports' => $sports,
                    'post' => $post,
                    'countries' => $countries,
                ]);
                return true;
            }

            if ($post_model->updatePostById($id)){
                View::redirect('/admin/post');
            }
        }

        $this->view->setTitle('Update Post');
        $this->view->render('admin/post/update',[
            'post' => $post,
            'sports' => $sports,
            'countries' => $countries,
        ]);
        return true;
    }

    public function actionDelete($id){
        if (Auth::isGuest()){
            View::redirect('/not_found');
        }

        Post::deletePost($id);
        View::redirect('/admin/post');

        return true;
    }

}