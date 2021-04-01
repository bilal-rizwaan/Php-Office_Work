<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator Php</title>
</head>
<body>
<input type="text" name="num1">
<select name="operation">
<option value="add">Addition</option>
<option value="sub">Subtract</option>
<option value="mul">Multiply</option>
<option value="div">Divide</option>
</select>
<input type="text" name="num2">
Result ==> 
<input type="text" name="total">
<input type="button" name="sub" value="Click">

<?php
if(isset($_POST['sub'])){
    $num1=$_POST['num1'];
    $num1=$_POST['num2'];
    $num1=$_POST['operation'];
    // $num1=$_POST['num1'];

}


?>

</body>
</html>