<?php
namespace app\controllers;
use lib\Router;

class IndexController{       
    public function __construct(){
               
    }
    public function index(){     
        // $roles = $this->getRoles();       
        // $data=["roles"=>$roles,"jsFiles"=>array("roles/js/default.js")];
        Router::renderView('index/index');
    }
}