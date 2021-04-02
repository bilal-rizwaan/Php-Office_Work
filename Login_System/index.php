<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="user">
        <input type="submit" name="submit" value="Login">
    </form>
    <?php
    if(isset($_POST['submit'])){
        echo $name=$_POST['user'];
        if($name=='Bilal'){
            $_SESSION['$name']='Bilal';
            header('location:index1.php');
            die();
        }
    }
    ?>
</body>
</html>