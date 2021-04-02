<?php
session_start();
if($_SESSION('$name')){
    echo "Welcome";
    echo '<a href="destroy.php">Logout</a>';
}else{
    echo "Error";
}
?>