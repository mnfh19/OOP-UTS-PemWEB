<?php

class koneksi{
    
	function konek(){
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "db_bekas";

        $conn = new mysqli($host, $user, $pass, $db);

        if($conn->connect_errno){
            echo "koneksi Gagal".$conn->connect_error;
        }

        return $conn;
    }

    
 
}



?>