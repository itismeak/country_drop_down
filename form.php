<html>
    <head>
        <title>form </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="http://localhost/dashboard/examble/ajax_drop_down/assets/main.js"></script>
    </head>
    <body>
        <form id="form" action="controll.php" method="POST">
            <label>name</label><br>
            <input type="text" name="name"  placeholder="enter name">
            <span class="user_name_error"></span>
            <br><br>
            <label>country name</label><br>
            <select name="country_name" id="country_name">
                <option value="0">--select your country name--</option>
                <?php
                    include "dbconn.php";
                    $sql="SELECT*FROM country";
                    $result=$conn->query($sql);
                    $data=$result->fetch_all();
                 foreach($data as $key=>$value){?>
                 <option value="<?php echo $value['0'] ?>"><?php echo $value['2'] ?></option><br>
                <?php } ?>
            </select>
            <span class="country_name_error"></span>
            <br><br>

            <label>country code</label><br>
            <select name="country_code" id="country_code">
                <option value="0">--select your country code--</option>
                  <?php foreach($data as $key=>$value){?>
                     <option value="<?php echo $value['0'] ?>"><?php echo $value['6'] ?></option>
                  <?php } ?>
            </select>
            <span class="country_code_error"></span>
            <br><br>
            
            <input type="submit" name="submit">
        </form>
    </body>
</html>