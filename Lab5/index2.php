
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $expression='123*123';
        for ($i = 0 ; $i <= strlen($expression); $i++);
            if (substr_count($expression, '+')) {   
                list($variable1, $variable2) = explode("+", $expression);
                echo $variable1+$variable2;
            }elseif (substr_count($expression, '*')) {
                list($variable1, $variable2) = explode("*", $expression);
                echo $variable1*$variable2;
            }elseif (substr_count($expression, '-')) {
                list($variable1, $variable2) = explode("-", $expression);
                echo $variable1-$variable2;
            }elseif (substr_count($expression, '*')) {
                list($variable1, $variable2) = explode("*", $expression);
                echo $variable1*$variable2;
            }
    ?>
</body>
</html>