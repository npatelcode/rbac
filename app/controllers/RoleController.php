<?php
namespace app\controllers;
use app\models\Role;
use lib\Router;

class RoleController extends Role{  
    private $model;  
    public function __construct(){
        parent::__construct();         
    }
    public function index(){     
        $roles = $this->getRoles();       
        $data=["roles"=>$roles,"jsFiles"=>array("roles/js/default.js")];
        Router::renderView('roles/index',$data);
    }
    public function create(){
        echo "\n User create";
    }
    public function update($id){        
        echo "\n User update";
        $role = $this->getRoles($id);       
        Router::renderView('roles/index',["roles"=>$role]);
    }
    public function delete($id){
        echo "\n User delete $id";
    }
    public function getRoleList(){
        $roles = $this->getRoles();                
        $data=json_encode($roles);
        echo '{
            "result": true,
            "data": {
              "contents":'.$data.',
              "pagination": {
                "page": 1,
                "totalCount": 4
              }
            }
          }';
        exit;
    }
}