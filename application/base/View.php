<?php
/**
 * Created by PhpStorm.
 * User: GABRIELYAN
 * Date: 14.07.2020
 * Time: 15:09
 */

namespace application\base;


class View
{
    public static function redirect($url){
        header('location: ' . $url);
        exit;
    }

}