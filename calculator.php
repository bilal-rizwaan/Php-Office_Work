<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator Php</title>
</head>
<body>
    <form method="POST">
            <input type="number" name="num1" required autocomplete="off">
                    <select name="operation">
                        <option value="add">Addition</option>
                        <option value="sub">Subtract</option>
                        <option value="mul">Multiply</option>
                        <option value="div">Divide</option>
                    </select>
            <input type="number" name="num2" required autocomplete="off">
            <input type="submit" name="submit" value="submit">
    </form>
        <p>
        <?php 
        if (isset($_POST['submit'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];
            switch ($operation) {
                case "add":$sum = $num1 + $num2;
                echo "The Sum of to number is $sum";
                    break;
                case "sub":$sub = $num1 - $num2;
                    echo "The Subtract of two number is is $sub";
                    break;
                case "mul":$mul = $num1 * $num2;
                    echo "The Multiply of two number is $mul";
                    break;
                case "div":$div = $num1 / $num2;
                    echo "The Division of two number is $div";
                    break;
                default :echo"The Result is Not Found";
            }
            }?>
        </p>
</body>

</html>