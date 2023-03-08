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
                    Домашняя работа Lab 5
                </h1>
            </div>
        </div>
    </header>
    <main>
        <section class="info">
            <div class="info__wrapper">
                <form method="post" class="info__calculator">
                    <div class="calculator__div">
                        <label class="calculator__label">
                            <input class="calculator__input" placeholder="123+123" type="" name="equation" value="">    
                        </label>
                        <?php $result='246' ?>

                        <div class="calculator__result">
                            <?php
                            if (isset($_POST['equation'])) {
                                $expression=$_POST['equation'];
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
                            };  
                            ?>
                        </div>
                    </div>
                    <ul class="calculator__pins">
                        <li>
                            <button class="pins__bracket" value=")">)</button>
                            <button class="pins__bracket" value="(">(</button>
                        </li>
                        <li>
                            <button class="pins__location" id="js-add-to-cart" value="9">9</button>
                            <button class="pins__location" id="js-add-to-cart" value="8">8</button>
                            <button class="pins__location" id="js-add-to-cart" value="7">7</button>
                            <button class="pins__location" id="js-add-to-cart" value="/">/</button>
                        </li>
                        <li>
                            <button class="pins__location" id="js-add-to-cart" value="6">6</button>
                            <button class="pins__location" id="js-add-to-cart" value="5">5</button>
                            <button class="pins__location" id="js-add-to-cart" value="4">4</button>
                            <button class="pins__location" id="js-add-to-cart" value="*">*</button>
                        </li>
                        <li>
                            <button class="pins__location" id="js-add-to-cart" value="3">3</button>
                            <button class="pins__location" id="js-add-to-cart" value="2">2</button>
                            <button class="pins__location" id="js-add-to-cart" value="1">1</button>
                            <button class="pins__location" id="js-add-to-cart" value="-">-</button>
                        </li>
                        <li>
                            <button class="pins__location" id="js-add-to-cart" value="0">0</button>
                            <button class="pins__location-text"  value="clear">AC</button>
                            <button class="pins__location" id="js-add-to-cart" value="=" type="submit">=</button>
                            <button class="pins__location" id="js-add-to-cart" value="+">+</button>
                        </li>
                    </ul>
                </form>
            </div>
        </section>
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