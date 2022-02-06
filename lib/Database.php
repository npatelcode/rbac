<?php
namespace lib;
use PDO;

class Database extends PDO{
    public \PDO $pdo;    
    public function __construct(){           
        try{                
            $this->pdo = new PDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
        }catch (PDOException $e){
            echo "Database Error : ".$e->getMessage();
            die();
        }
    }

}