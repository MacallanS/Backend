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
                    Домашняя работа Lab 2
                </h1>
            </div>
        </div>
    </header>
    <main class="function">
        <textarea class="function_text" name='function_text' id='' cols='65' rows='10'>
            <?php
            $url = 'http://www.example.com';
            print_r(get_headers($url));
            ?>
        </textarea>
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