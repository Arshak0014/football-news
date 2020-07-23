<?php
/**
 * Created by PhpStorm.
 * User: GABRIELYAN
 * Date: 18.07.2020
 * Time: 19:21
 */

namespace application\controllers\admin;


use application\base\AdminBaseController;
use application\base\View;
use application\components\Auth;
use application\models\Country;

class CountryController extends AdminBaseController
{
    public function actionIndex(){

        if (Auth::isGuest()){
            View::redirect('/login');
        }

        $countries = Country::getCountries();

        $this->view->setTitle('Countries');
        $this->view->render('admin/country/index',[
            'countries' => $countries
        ]);
        return true;
    }

    public function actionCreate(){

        if (Auth::isGuest()){
            View::redirect('/login');
        }

        if (!empty($_POST) && isset($_POST['submit'])){
            $country_model = new Country($_POST);
            $validate = $country_model->validate();

            if (!empty($validate)){
                $this->view->setTitle('Create Country');
                $this->view->render('admin/country/create',[
                    'validate' => $validate,
                ]);
            }
            if ($country_model->createCountry()){
                View::redirect('/admin/country');
            }
        }

        $this->view->setTitle('Create Country');
        $this->view->render('admin/country/create');
        return true;
    }

    public function actionUpdate($id){

        if (Auth::isGuest()){
            View::redirect('/login');
        }

        $country = Country::getCountryById($id);

        if (!empty($_POST) && isset($_POST['submit'])){
            $sport_model = new Country($_POST);
            $validate = $sport_model->validate();

            if (!empty($validate)){
                $this->view->setTitle('Update');
                $this->view->render('admin/country/create',[
                    'validate' => $validate,
                ]);
            }
            if ($sport_model->updateCountryById($id)){
                View::redirect('/admin/country');
            }
        }

        $this->view->setTitle('Update');
        $this->view->render('admin/country/update',[
            'country' => $country
        ]);
        return true;
    }

    public function actionDelete($id){
        if (Auth::isGuest()){
            View::redirect('/login');
        }

        country::deleteCountry($id);
        View::redirect('/admin/country');

        return true;
    }


}