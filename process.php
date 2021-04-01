<?php
$user=$_POST['user'];
$pass=$_POST['pass'];
 $con= mysqli_connect("localhost","root","","connect");
 $query=mysqli_query($con,"insert into form_record(Username,Password) values('$user','$pass')") or die("Error". mysqli_error($con));
 if($query){
     echo "DataBase is Connect";
 }

?>

