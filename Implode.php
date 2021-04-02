<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imlode In Php</title>
</head>
<body>
    <center>
        <pre>
            <?php
            echo "<h1>Implode Function</h1>";
            echo "<p>The implode() function returns a string from the elements of an array. </p>";
            $a=["Red","Green","Blue"];
            $x = implode(',',$a);
            echo $x;
            echo "<h1>Explode Function</h1>";
            echo "<p>The explode() function breaks a string into an array.</p>";
            $b=["Yellow","Purple","Brown"];
            print_r(explode(",",$x));
            ?> 
        </pre>
    </center>
</body>
</html>