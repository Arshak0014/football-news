<?php
/**
 * Created by PhpStorm.
 * User: GABRIELYAN
 * Date: 14.07.2020
 * Time: 13:53
 */

namespace application\controllers\admin;

use application\base\AdminBaseController;
use application\base\View;
use application\components\Auth;
use application\models\Sport;

class SportController extends AdminBaseController
{
    public function actionIndex(){

        if (Auth::isGuest()){
            View::redirect('/login');
        }

        $sports = Sport::getSports();

        $this->view->setTitle('Sports');
        $this->view->render('admin/sport/index',[
            'sports' => $sports
        ]);
        return true;
    }

    public function actionCreate(){

        if (Auth::isGuest()){
            View::redirect('/login');
        }

        if (!empty($_POST) && isset($_POST['submit'])){
            $sport_model = new Sport($_POST);
            $validate = $sport_model->validate();

            if (!empty($validate)){
                $this->view->setTitle('Create Sports');
                $this->view->render('admin/sport/create',[
                    'validate' => $validate,
                ]);
            }
            if ($sport_model->createSport()){
                View::redirect('/admin/sport');
            }
        }

        $this->view->setTitle('Create Sports');
        $this->view->render('admin/sport/create');
        return true;
    }

    public function actionUpdate($id){

        if (Auth::isGuest()){
            View::redirect('/login');
        }

        $sport = Sport::getSportById($id);

        if (!empty($_POST) && isset($_POST['submit'])){
            $sport_model = new Sport($_POST);
            $validate = $sport_model->validate();

            if (!empty($validate)){
                $this->view->setTitle('Update');
                $this->view->render('admin/sport/create',[
                    'validate' => $validate,
                ]);
            }
            if ($sport_model->updateSportById($id)){
                View::redirect('/admin/sport');
            }
        }

        $this->view->setTitle('Update');
        $this->view->render('admin/sport/update',[
            'sport' => $sport
        ]);
        return true;
    }

    public function actionDelete($id){
        if (Auth::isGuest()){
            View::redirect('/login');
        }

        Sport::deleteSport($id);
        View::redirect('/admin/sport');

        return true;
    }

}