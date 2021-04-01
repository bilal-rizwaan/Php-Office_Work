<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial in Php</title>
</head>
<body>
<input type="text" value='<?php echo $_GET['name']?>'>
<h2>
    <?php
    function fact($a){
        $f=1;
        for($i=1;$i<=$a;$i++)
        {
        $f=$f*$i;
        }
        return $f;       
    }
    echo fact(5)
    ?>
</h2>
    
</body>
</html>