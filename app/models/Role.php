<?php
namespace app\models;
use lib\Database;

class Role extends Database{
    private $id;
    private $title;
    private $slug;
    private $description;
    private $active;
    private $createdAt;
    private $updatedAt;
    private $content;

    public function __construct()
    {
        parent::__construct();
    }

    public function getRoles(int $id=0){
        if($id>0){
            $sql="SELECT  * FROM role WHERE id=?";
            $stmt=$this->pdo->prepare($sql);            
            $stmt->execute([$id]);            
        }else{
            $sql="SELECT id,title,description,active,createdAt FROM role";
            $stmt=$this->pdo->prepare($sql);           
            $stmt->execute();            
        }
        $data=$stmt->fetchAll(\PDO::FETCH_OBJ);
        return $data;
    }
    public function create(){
        echo "Role Index";
    }
    public function update($id){
        echo "Role Index $id";
    }
    public function delete($id){
        echo "Role Index $id";
    }
}