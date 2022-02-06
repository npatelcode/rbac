<?php
namespace app\controllers;
use app\models\User;

class UserController extends User{    
    public function __construct(){
        parent::__construct();
    }
    public function index(){        
        echo "\n User index";        
    }
    public function create(){
        echo "\n User create";
    }
    public function update($id){        
        echo "\n User update $id";
    }
    public function delete(){
        echo "\n User delete";
    }
}