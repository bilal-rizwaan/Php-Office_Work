<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="bilal.capripio@gmail.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array in Php</title>
</head>
<body>
    <?php
        $record=array("Sam" => "21","Jerry" => "22","John" => "20","Harry" => "23","Manual" => "24");
        foreach($record as $data=>$age){
            echo $data . '&nbsp;'. $age. '</br>';
        }
    ?>
</body>
</html>