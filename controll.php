<?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(isset($_POST['submit']))
        {
            include "dbconn.php";

            $user_name=$_POST['name'];
            $country_name=$_POST['country_name'];
            $country_code=$_POST['country_code'];

            $sql="INSERT INTO aj_dd(user_name,country_name,country_code)VALUES('$user_name','$country_name','$country_code')";

           if($conn->query($sql)===true){
                echo "New record created successfully";
           }else {
            echo "Error: " . $sql . "<br>" . $conn->error;
           }

            

        }else{
            echo "not submit form data";
        }
    }else{
        echo "<h1>NOT ALLOW TO ACCESS</h1>";
    }
?>