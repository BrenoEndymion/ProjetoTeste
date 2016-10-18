<?php
class Dashboard extends Controller {

    function __construct() {
        parent::__construct();
        Session::init();
        $logado = Session::get('LogIn');
        if($logado == false){
            Session::destroy();
            header('location: '.URL.'login');
            exit;
        }
    }
    
    public function index() {
        
        $this->view->render("dashboard/index");
    }

    function logout(){
        Session::destroy();
        header('location: '.URL.'login');
        exit;
    }     
}