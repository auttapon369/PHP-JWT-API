<?php
class  DatabaseService{

    private $db_host = "0.0.0.0";
    private $db_host2 = "0.0.0.0";
    private $db_name = "****";
    private $db_user = "********";
    private $db_password = "********";
    private $connection;

    public function getConnection(){

        $this->connection = null;

        try{
            $this->connection = new PDO("mysql:host=" . $this->db_host . ";dbname=" . $this->db_name, $this->db_user, $this->db_password);
        
        }catch(PDOException $exception){
            echo "Connection failed: " . $exception->getMessage();
        }

        return $this->connection;
    }
    public function getConnection2(){

        $this->connection = null;

        try{
            $this->connection = new PDO("mysql:host=" . $this->db_host2 . ";dbname=" . $this->db_name, $this->db_user, $this->db_password);
        
        }catch(PDOException $exception){
            echo "Connection failed: " . $exception->getMessage();
        }

        return $this->connection;
    }
}
