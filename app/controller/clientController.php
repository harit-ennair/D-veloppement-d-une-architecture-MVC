<?php 
namespace App\Controller;



class ClientController{

    public function index(){
        if(isset($_SESSION['user_id'])){
            require_once __DIR__.'/../View/page/index.php';
        }else{
            require_once __DIR__.'/../View/page/login.php';
        }
    }

}