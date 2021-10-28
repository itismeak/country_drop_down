<?php
    $server_name="localhost";
    $user_name="root";
    $psw="";
    $db_name="mydb";

    $conn=new mysqli($server_name,$user_name,$psw,$db_name);

    if($conn->connect_error){
        echo "connection_failed".$conn->connect_error;
    }
?>