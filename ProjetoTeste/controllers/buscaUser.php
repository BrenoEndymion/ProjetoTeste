<?php

class buscaUser {

    function __construct() {
        $nome = $_POST['nome'];

        $json_file = file_get_contents("https://api.github.com/users/$nome");
        $json_str = json_decode($json_file);
        foreach ($json_str as $e) {

            echo $e;
        }
    }

    public function index() {
        
    }

}
