<?php
class Database{
    private $user ="root";
    private $pass="";
    private $db="NepaliFootprints";
    private $host ="localhost";



    public function connect(){
        $conn  = new mysqli($this->host,$this->user,$this->pass,$this->db);


        if($conn->connect_error){
            die("Connection Failed :".$conn->connect_error);
        }

        return $conn;
    }
}


?>