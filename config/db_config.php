<?php
    $db_server="localhost:3306";
    $db_name="foodshala";
    $db_user_name="root";
    $db_password="";
    $conn =  new mysqli($db_server,$db_user_name,$db_password,$db_name);
    if($conn->connect_error)
    {
         die("Connection failed" .$conn->connect_error);
    }
    session_start();
?>