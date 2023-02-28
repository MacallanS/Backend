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
    <main class="function">
        <form class="function__form" action="index.php" method="post">
            <input class="function__input-a" type="text" name="equation(a)" value="">
            <input class="function__input-b" type="text" name="equation(b)" value="">
            <p>x =</p>
            <input class="function__input-c" type="text" name="equation(c)" value="">
            <button class="form__button" type="submit">
                Subscribe
            </button>
        </form>
        <?php  
            if (isset($_POST['equation(a)'])) {
                $a = $_POST['equation(a)'];
            };
            if (isset($_POST['equation(b)'])) {
                $b = $_POST['equation(b)'];
            };
            if (isset($_POST['equation(c)'])) {
                $c = $_POST['equation(c)'];
            };
            echo $a;
            echo $b;
            echo $c;
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