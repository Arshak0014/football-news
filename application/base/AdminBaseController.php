<?php


namespace application\base;


class AdminBaseController
{
    protected $view;

    public function __construct()
    {
        $this->view = new BaseView();
        $this->view->setLayout('admin');
    }

}