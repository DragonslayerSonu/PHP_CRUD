<?php
session_start();

$_SESSION["favfood"]="Biriyani";

if(isset($_SESSION["favfood"])){
    echo "SESSION IS SET";
}

?>