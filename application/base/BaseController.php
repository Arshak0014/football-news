<?php

namespace application\base;

class BaseController
{
    protected $view;

    public function __construct()
    {
        $this->view = new BaseView();

        $this->view->setLayout('main');
    }
}