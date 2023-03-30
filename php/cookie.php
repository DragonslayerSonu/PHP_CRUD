<?php 
$COOKIE_NAME="USER";
$COOKIE_VALUE="SONU";

setcookie($COOKIE_NAME,$COOKIE_VALUE,time()+(3600*24),"/");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(!isset($_COOKIE[$COOKIE_NAME])){
        echo "Cookie is not set";
    }else{
        echo $_COOKIE[$COOKIE_NAME];
    }
    ?>
    
</body>
</html>