<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        include "dbconn.php";
        $country_id=$_POST['user_data'];
        $sql="SELECT*FROM country WHERE id='$country_id'";
        $result=$conn->query($sql);
        $data=$result->fetch_assoc();
        echo $data['phonecode'];
    }else {
        echo "not access";
    }
?>