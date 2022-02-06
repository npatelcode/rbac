<?php
namespace lib;

class Router{
    private $getRoutes = [];   
    private $postRoutes = [];        
  
    public function __construct()
    { 
    }

    public function get($route,$fn){       
        if (strcasecmp($_SERVER['REQUEST_METHOD'], 'GET') !== 0) {
            return;
        }       
       $this->getRoutes[$route]=$fn;
    }

    public function post($route,$fn){    
        if (strcasecmp($_SERVER['REQUEST_METHOD'], 'POST') !== 0) {
            return;
        }          
        $this->postRoutes[$route]=$fn;
    }

    public function resolve(){
        $uri_params = $_SERVER['REQUEST_URI'] ?? "/";
        
        if((stripos($uri_params, "?") > 0)){           
            $params=$uri_params;
            
        }else
            $params = (stripos($uri_params, "/") !== 0) ? "/" . $uri_params : $uri_params;
        
        
        $req_method = $_SERVER['REQUEST_METHOD'];
        $fn="";
        $paramsData=[];
        if($req_method === 'GET'){
			$routes=$this->getRoutes;
		}else{
            $routes=$this->postRoutes;			
		}
        
        foreach($routes as $key=>$val){
            if((stripos($key, "?") > 0)){                            
                $regex= str_replace('?','\?', $key);
                $regex= str_replace('&','\&', $regex);
                $regex= str_replace('/','\/', $regex);
            }else
                $regex= str_replace('/','\/', $key);                        

            $is_match = preg_match('/^' . ($regex) . '$/', $params, $matches, PREG_OFFSET_CAPTURE);                
            if ($is_match) {                
                $fn = $routes[$key];
                array_shift($matches);
                $paramsData = array_map(function ($param) {
                    return $param[0];
                }, $matches);
            }
        }
        if($fn==""){
            echo "<h3>Error 404 : Page Not Found1</h3>";
        }else{
            $size=count($paramsData);                        
            if(method_exists($fn[0],$fn[1])){
                $controller= new $fn[0]();
                $method=$fn[1];               
                switch($size){
                    case 0: $controller->$method(); break;
                    case 1: $controller->$method($paramsData[0]); break;
                    case 2: $controller->$method($paramsData[0],$paramsData[1]); break;
                    default:
                        $controller->index(); echo "default"; break;
                } 
            }
        }
    }

    public static function renderView($view,$params = [])
	{        
		foreach($params as $key=>$value){
			$$key=$value;
		}        
       $viewFile="../public/views/$view.php";
        if(file_exists($viewFile)){ 
            ob_start();
            include_once $viewFile;
            $content = ob_get_clean(); // save content of file in buffer and save in variable
            include_once "../public/views/layout.php";
        }
	}
}