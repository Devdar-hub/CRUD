<?php

class database{
    private $dbservername="localhost";
    private $dbusername="root";
    private $dbpassword="";
    private $dbname="wt_crud";

    function getconnection(){
        $conn = new mysqli($this->dbservername,$this->dbusername,$this->dbpassword,$this->dbname);
        if($conn->connect_error){
            echo "Connection failed".$conn->connect_error."<br>";

        }
        else{
            return $conn;
        }
    }
}
?>