<?php
class  DatabaseService{

    private $db_host = "192.168.111.207";
    private $db_host2 = "192.168.111.207";
    private $db_name = "mwa_waterlevel";
    private $db_user = "root";
    private $db_password = "159357";
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