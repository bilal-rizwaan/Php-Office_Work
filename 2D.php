<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2D Multi-dimensional Array Php</title>
</head>
<body>
<?php
echo '<pre>';
        $a=array(
            array('Sam', 21 , 'sam@gmail.com'),
            array('Jam', 21 , 'jam@gmail.com'),
            array('Cam', 21 , 'cam@gmail.com'),
            array('Dam', 21 , 'dam@gmail.com'),
            array('Fam', 21 , 'fam@gmail.com')
        );
        $len=count($a);
        for($i=0;$i<=$len;$i++)
        {
            for($j=0;$j<=$len;$j++){
                echo $a[$i][$j].'</br>';
            }
        }
echo '</pre>';
?>
    
</body>
</html>