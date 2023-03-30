<?php
session_start();

session_unset();

$delete=session_destroy();

if(isset($delete)){
    echo "session destroyed";
}
?>