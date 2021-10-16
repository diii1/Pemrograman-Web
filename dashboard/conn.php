<?php
    function connection(){
        $servername = "localhost";
        $username = "dev_web";
        $password = "masukaja12";
        $dbname = "dev_web";
    
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
    
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
    
        return $conn;
    }
?>