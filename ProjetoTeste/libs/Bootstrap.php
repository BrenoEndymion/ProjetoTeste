<?php

class Bootstrap {

    function __construct() {
        $fileCss = 0;
        $fileJs = 0;
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        //print_r($url);


        if ($url[0] == "index.php") {
            require 'controllers/index.php';
            $controller = new Index();
            $controller->index();
            return false;
        }
        $file = 'controllers/' . $url[0] . '.php';
        if (isset($url[1])) {
            $fileCss = 'public/css/' . $url[1] . '.css';
        }
        if (isset($url[2])) {
            $fileJs = 'public/js/' . $url[2];
        }
        if (file_exists($file)) {
            require $file;
        } else if (file_exists($fileCss)) {
            require $fileCss;
        } else if (file_exists($fileJs)) {
            require $fileJs;
            return false;
        } else {
            require 'controllers/error.php';
            $controller = new Error();
            return false;
        }
        $controller = new $url[0];
        //$controller->loadModel($url[0]);

        //chamando methods
        if (isset($url[2])) {
            if (method_exists($controller, $url[1])) {
                $controller->{$url[1]}($url[2]);
            } else {
                $this->error();
            }
        } else {
            if (isset($url[1])) {
                if (method_exists($controller, $url[1])) {
                    $controller->{$url[1]}();
                } else {
                    $this->error();
                }
                $controller->{$url[1]}();
            } else {
                $controller->index();
            }
        }
    }

    function error(){
        require 'controller/error.php';
        $controller = new Error();
        $controller->index();
        return false;
    }
    
}
