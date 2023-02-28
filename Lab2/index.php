<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laba_2</title>
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
    <main>
        <section class="registration">
            <form class="registration__forma" action="//httpbin.org/post" method="post">
                <fieldset class="forma__name">
                    <legend class="name__text">
                        Ваше имя <span class="zvez">*</span>
                    </legend>
                    <label class="name__label">
                        <span class="visually-hidden">
                        Type Your Name
                        </span>
                        <input class="name__input inputs" type="name" placeholder="Type Your Name" name="Name">
                    </label>
                </fieldset>
                <fieldset class="forma__sex">
                    <legend class="sex__text">
                        Ваш пол
                    </legend>
                    <label class="sex__radio">
                      <span class="sex__man">
                          Мужской
                      </span>
                      <input class="sex__input" type="radio" name="sex" id="" value="man">
                    </label>
                    <label class="sex__radio">
                      <span class="sex__woman">
                          Женский
                      </span>
                      <input class="sex__input" type="radio" name="sex" id="" value="women">
                    </label>
                </fieldset>
                  <fieldset class="phone__numder">
                    <legend class="numder__text">
                      Ваша почта <span class="zvez">*</span>
                    </legend>
                    <label class="numder__label">
                      <span class="visually-hidden">
                        Type Your Email
                      </span>
                      <input class="numder__input inputs" type="email" placeholder="Type Your Email" name="Email">
                    </label>
                  </fieldset>
                <fieldset class="form__address">
                  <legend class="address__text">
                    Адресс фитнес центра <span class="zvez">*</span>
                  </legend>
                  <label>
                      <select class="address__choice" name="city" id="">
                      <option value="Good">
                          Отлично   
                      </option>
                      <option value="well">
                          Хорошо
                      </option>
                      <option value="Bad">
                          Плохо
                      </option>
                    </select>
                  </label>
                </fieldset>
                <fieldset style="margin-left:0px;" class="phone__numder">
                    <legend class="numder__text">
                      Коментарий <span class="zvez">*</span>
                    </legend>
                    <label class="numder__label">
                      <span class="visually-hidden">
                      Type Your Numder
                      </span>
                      <input class="numder__comment inputs" type="comment" placeholder="Type Your Comment" name="comment">
                    </label>
                  </fieldset>
                <button class="form__button" type="submit">
                    Subscribe
                </button>
                <div class="registration__get">
                  <a class="get__link" type="submit" href="./back.php">
                    get_headers
                  </a>
                </div>
            </form>
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