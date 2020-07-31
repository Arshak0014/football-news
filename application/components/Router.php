<?php

namespace application\components;

use application\base\BaseView;

class Router
{
    private $routes;

    public function __construct()
    {
        $routesPath = __DIR__.'/../config/routes.php';
        $this->routes = include_once($routesPath);
    }

    private function getUri()
    {
        if (!empty($_SERVER['REQUEST_URI'])){
            return trim($_SERVER['REQUEST_URI'], '/');
        }
        return true;
    }

    public function run()
    {
        $uri = $this->getUri();

        foreach ($this->routes as $pattern => $path)
        {
            if (preg_match("~$pattern~",$uri)) {
                $route = preg_replace("~$pattern~", $path, $uri);

                $segments = explode('/', $route);

                $controllerPath = "application/controllers/";
                if (in_array('admin',$segments)) {
                    $controllerPath = 'application/controllers/admin/';
                    array_shift($segments);
                }

                $controllerName = $controllerPath.ucfirst(array_shift($segments))."Controller";


                $actionName = "action".ucfirst(array_shift($segments));
                $parameters = $segments;


                if (!file_exists($controllerName.'.php')) {
                    header("Location: /404");
                }


                $controllerName = str_replace("/", "\\", $controllerName);
                $objectName = new $controllerName();

                if (!method_exists($objectName, $actionName)) {

                    BaseView::errorCode('404');
                }

                $result = call_user_func_array(array($objectName, $actionName), $parameters);

                if ($result != null) {
                    break;
                }
            }
        }
    }

    public static function getSegment($number){
        $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri_segments = explode('/', $uri_path);

        return $uri_segments[$number];
    }

    public static function getPage(){
        $url=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']==='on'?"https":"http")."://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $parts=explode("/",$url);
        $paging=end($parts);

        if (!isset($paging)) {
            $page = 1;
        } else {
            $page = $paging;
        }
        return $page;
    }


}