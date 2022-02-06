<?php
require_once "../config.php";
require_once __DIR__.'/../vendor/autoload.php';


use lib\Router;
use app\controllers\UserController;
use app\controllers\RoleController;
use app\controllers\IndexController;

$router = new Router();

$router->get("/",[IndexController::class,'index']);

$router->get("/user",[UserController::class,'index']);
$router->get("/user/add",[UserController::class,'create']);
$router->get("/user/update/([0-9]*)",[UserController::class,'update']);
$router->get("/user/delete/([0-9]*)",[UserController::class,'delete']);


$router->get("/role",[RoleController::class,'index']);
//$router->get("/role/getrolelist",[RoleController::class,'getRoleList']);
$router->get("/role/getrolelist?perPage=([0-9]*)&page=([0-9]*)",[RoleController::class,'getRoleList']);
$router->get("/role/update/([0-9]*)",[RoleController::class,'update']);

$router->resolve();