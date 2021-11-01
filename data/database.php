<?php
    // Database credentials
    $servername = "sql113.unaux.com";
    $username   = "unaux_30236980";
    $password   = "8gcf3ev";
    $dbname     = "unaux_30236980_lemontyc";
    $tbname     = "sensor";

    // Create database connection
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
    
    // Check Connection
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
    //echo "[MySQL] Connected successfully <br/>";
?>