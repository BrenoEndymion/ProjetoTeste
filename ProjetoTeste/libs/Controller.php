<?php

class Controller {

    function __construct() {
        //echo 'Controlador Principal <br />';
        $this->view = new View();
    }
    
    public function loadModel($name){
        $caminho = 'models/'. $name . '_model.php';
        if(file_exists($caminho)){
            require 'models/'. $name . '_model.php';
            $modelName = $name . '_Model';
            $this->model = new $modelName();
        }
    }

}