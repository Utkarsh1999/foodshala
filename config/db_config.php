<?php
    $db_server="localhost:3306";
    $db_name="foodshala";
    $db_user_name="root";
    $db_password="";
    // $db_server="sql12.freesqldatabase.com:3306";
    // $db_name="sql12333339";
    // $db_user_name="sql12333339";
    // $db_password="3IW5B6uDmc";
    $conn =  new mysqli($db_server,$db_user_name,$db_password,$db_name);
    if($conn->connect_error)
    {
         die("Connection failed" .$conn->connect_error);
    }
    session_start();
?>