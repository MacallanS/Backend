<?php
// Объявление переменной
    // $f = 2;
    // $a = 2;
    // define('pi', 3.14);
    // $R = 20;
    // $L = 2 * $R * pi;
    // echo "<h1> $L <h1>";
    // echo '<h2>' .$L. '</h2>' ;

    // // $c = (float)$f;
    // $s = $f.'hello';
    // $b = true;
    // // printf ('%.3Gap' , $c);
    // echo '<br>';

    // echo $f + $s;
    // echo '<br>';
    // echo "\$b=: $b";
    // echo '</br>';
    // echo '$b='.$b. 'type: '.gettype($b);
    // echo gettype($f);

    // $a = 3.73847812924;
    // echo floor($a);
    // // floor отрезает круглую часть
    // echo '<br>';
    // echo 'round '.round($a). '<br>';
    // // round округляет
    // echo 'ceil' .ceil($a);

    // $a = 3.14;
    // printf('%.8f',  $a);
    // echo '<br>';
    // $d = 5;
    // printf("%'.6d", $d);

    // операции
    // $a = true;
    // $b = false;
    // echo "\$a = $a<br>";
    // echo "\$b = $b<br>";
    // // echo '+'.$a + $b. '<br>';
    // // echo '-'.$a - $b. '<br>';
    // // echo '*'.$a * $b. '<br>';
    // // echo '/'.$a / $b. '<br>';
    // // echo '%'.$a % $b. '<br>';
    // echo '2<sup>10</sup>='.pow(2, 10);

    // echo '<br>';
    // var_dump($a===$b);
    // echo '<br>';
    // var_dump($a==$b);

    // echo '<br>';
    // var_dump($a>=$b);
    

    // echo '<br>';
    // var_dump(!$a);
    // // ! = знак НЕ


    // echo '<br>';
    // $c = 6;
    // echo $c++. '<br>';
    // echo ++$c;
    // echo '<br>';
    // echo $c+=2;
    // echo $c--.'<br>';
    // echo --$c.'<br>';


    // условие
    $a = 6;
    $b = 4;
    // if($a < $b){
    //     $c = $b - $a;
    //     echo $C;
    // }
    // // if ($a < $b) echo $b - $a;
    // else echo $a - $b;

    // if($a) echo $a;
    // // значение истинны
    
    switch ($a + $b){
        case 10: 
            echo $a + $b;
            break;
        case 0:
            echo 'ok';
            break;
        default: echo 'default';
    }

    echo '<br>';
    while($a!=0){
        echo --$a;
    }


    echo '<br>';
    do{
        echo --$a;
    }while ($a>0);

    echo '<br>';
    for($i = 7; $i != 10; $i++){
        echo $i.'<br>';
    }
?>


if (isset($_POST['equation'])) {
                $str = $_POST['equation'];
                $lenstr=strlen($str);
                if ($lenstr>0) {
                    for( $i = 0 ; strlen($str); $i=$i+1){
                        if ($str[$i] == '-'){
                            echo $i;
                        }
                    }
                };
            };