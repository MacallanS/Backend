<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back</title>
    <link rel="stylesheet" href='./normalize.css'>
    <link rel="stylesheet" href='./style.css'>
    <?php $end = 'Работу сделал Хаметов Артем' ?>
</head>
<body>
    <header class="header">
        <div class="header__wrapper">
            <img class="header__logo" src="./logo.png" alt="logo">
            <div>
                <h1 class="header__heading">
                    Домашняя работа Lab 4
                </h1>
            </div>
        </div>
    </header>
    <main class="function__4">
        <form action="index.php" method="post">
            <input class="function__input" type="text" name="equation" value="">
            <button class="form__button" type="submit">
                Subscribe
            </button>
        </form>
        
        <?php  
            if (isset($_POST['equation'])) {
                $str = $_POST['equation'];
                $str = preg_replace("/\s+/", "", $str);
                if (strlen($str)>5) {
                    echo 'Введите однозначное число';
                }elseif (strlen($str)>0) {
                    for( $i = 0 ; $i < strlen($str); $i=$i+1){
                        if ($str[$i]=='-'){
                            $index = $i;
                            $a='-';
                        }
                        if ($str[$i]=='*'){
                            $index = $i;
                            $a='*';
                        }
                        if ($str[$i]=='/'){
                            $index = $i;
                            $a='/';
                        }
                        if ($str[$i]=='+'){
                            $index = $i;
                            $a='+';
                        }
                        if ($str[$i]=='='){
                            $index_equally = $i;
                        }
                    }
                    $difference=$index_equally - $index-1;
                    $number = (strlen($str)) - $index_equally;
                    if ($difference==1){
                        $b=$str[$number];
                    }
                    $c=$str[$index_equally+1];
                    $b=(int)$b;
                    $c=(int)$c;
                    if ($a=='*'){
                        echo $c / $b;
                    }
                    if ($a=='+'){
                        echo $c - $b;
                    }
                    if ($a=='/'){
                        echo $c * $b;
                    }
                    if ($a=='-'){
                        echo $c + $b;
                    }
                };
            };
        ?>
    </main>
    <footer class="footer">
        <div class="footer__wrapper">
            <div class="footer__php">
                <?php
                    echo  $end;       
                ?>
            </div>
        </div>
    </footer>
</body>
</html>