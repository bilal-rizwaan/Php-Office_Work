<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fun Php</title>
</head>
<body>
<center>
        <form method="POST">
            <input type="text" name="lv1">
            <input type="text" name="lv2">
            <input type="submit" name="submit" value="submit">
            <pre>
            <?php
            if(isset($_POST['submit'])){
                $lv1=$_POST['lv1'];
                $lv2=$_POST['lv2'];
                $ran=rand(50,99);
                echo $lv1 ." + ". $lv2 ." = " .$ran ."%";
            }
            ?>
            </pre>
        </form>
</center>
    
</body>
</html>