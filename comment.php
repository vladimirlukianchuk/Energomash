<?php
include ("dbconnect.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Научно-техническая фирма ЭНЕРГОМАШ-инжиниринг</title>
    <meta charset="utf-8">
    <link href="/min/font-awesome.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="/min/styles.css" rel="stylesheet">
    <link href="slick/slick.css" rel="stylesheet">
    <link href="slick/slick-theme.css" rel="stylesheet">
    <link href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="/slick/slick.min.js"></script>
    <script src="/min/scripts.js"></script>
    <script src="/js-em/index.js"></script>
</head>
<body>
<div class="top">
    <div class="top-content">
        <div class="top-content__left">
            <p>Научно-техническая фирма “ЭНЕРГОМАШ-инжиниринг” - энергетическая арматура, топочно-горелочные устройства.</p>
        </div>
        <div class="top-content__right">
            <p>Задать вопроc</p>
        </div>
    </div>
</div>
<div class="header">
    <div class="header__logo"><img src="/image/logo.png" alt=""></div>
    <div class="header__mail">
        <p class="header__title"><i class="fa fa-envelope-square orange-icon" aria-hidden="true"></i> Напишите нам<br></p><span class="header__text">energomashNTF@gmail.com</span>
    </div>
    <div class="header__phone">
        <p class="header__title"><i class="fa fa-phone-square orange-icon" aria-hidden="true"></i> Позвоните нам<br></p><span class="header__text">+7 <span class="phone-big">(8634)</span> 38-80-81<br></span><span class="header__text">+7 <span class="phone-big">(8634)</span> 38-94-64<br></span><span class="header__text">+7 <span class="phone-big">(8634)</span> 64-54-21</span>
    </div>
</div>
<div class="nav">
    <ul class="nav__list">
        <li class="nav__list-item"><a href="/">Главная</a></li>
        <li class="nav__list-item"><a href="/about-us.html">О предприятии</a></li>
        <li class="nav__list-item"><a href="/contacts.html">Контакты</a></li>
        <li class="nav__list-item"><a href="/question.html">Задать вопрос</a></li>
    </ul>
</div>
<div class="page">
    <div class="left-menu">
        <ul class="left-menu-content">
            <li class="left-menu-content__item"><a href="#">ТОПЛИВНАЯ АРМАТУРА
                    <ul>
                        <li class="left-menu-content__subitem"><a href="/pzk-gazovyi.html">ПЗК газовый</a></li>
                        <li class="left-menu-content__subitem"><a href="/pzk-mazutnyi.html">ПЗК мазутный</a></li>
                        <li class="left-menu-content__subitem"><a href="/zrk-gazovyi.html">ЗРК газовый</a></li>
                        <li class="left-menu-content__subitem"><a href="/rk-gazovyi.html">РК газовый</a></li>
                        <li class="left-menu-content__subitem"><a href="/rk-mazutnyi.html">РК мазутный</a></li>
				<li class="left-menu-content__subitem"><a href="/block.html">Блок газооборудования </a></li>
                    </ul></a></li>
            <li class="left-menu-content__item"><a href="#">ПАРОВОДЯНАЯ АРМАТУРА
                    <ul>
                        
                        <li class="left-menu-content__subitem"><a href="/predohranitelmyi-klapan.html">Предохранительный клапан</a></li>
                        <li class="left-menu-content__subitem"><a href="/regulirujushhie-i-pitatelnye-klapana.html">Клапан отсекающий</a></li>
                        <li class="left-menu-content__subitem"><a href="/vodoukazatelnye-pribory.html">Водоуказательные приборы</a></li>
                    </ul></a></li>
            <li class="left-menu-content__item left-menu-content__simple"><a href="/armatura-dlya-aes.html">АРМАТУРА ДЛЯ АЭС</a></li>
            <li class="left-menu-content__item"><a href="#">ГОРЕЛКИ
                    <ul>
                        <li class="left-menu-content__subitem"><a href="/gorelka-gazomazutnaya-mvi-10.html">Горелка газомазутная ГМВИ (III)-10</a></li>
                        <li class="left-menu-content__subitem"><a href="/gorelka-gazomazutnaya-mvi-25.html">Горелка газомазутная ГМВИг (III)-25</a></li>
                        <li class="left-menu-content__subitem"><a href="/pylegazovye-gorelki.html">Пылегазовые горелки</a></li>
                    </ul></a></li>
            <li class="left-menu-content__item left-menu-content__simple"><a href="/ajerodromnoe-oborudovanie.html">АЭРОДРОМНОЕ ОБОРУДОВАНИЕ</a></li>
            <li class="left-menu-content__item left-menu-content__simple"><a href="/kotelnoe-oborudovanie.html">КОТЕЛЬНОЕ ОБОРУДОВАНИЕ</a></li>
            <li class="left-menu-content__item left-menu-content__simple"><a href="/specialnoe-oborudovnaie-tec.html">СПЕЦИАЛЬНОЕ ОБОРУДОВАНИЕ ТЭЦ</a></li>
        </ul>
    </div>
    <div class="content">
        <h1 class="content__heading">Наши контакты</h1>

        <?php
        $c=0;
        $r=mysql_query ("SELECT * FROM gb ORDER BY dt DESC"); // выбор всех записей из БД, отсортированных так, что самая последняя отправленная запись будет всегда первой.
        while ($row=mysql_fetch_array($r))  // для каждой записи организуем вывод.
        {
            if ($c%2)
                $col="bgcolor='#f9f9f9'";	// цвет для четных записей
            else
                $col="bgcolor='#f0f0f0'";	// цвет для нечетных записей

            ?>
            <table border="0" cellspacing="3" cellpadding="0" width="90%" <? echo $col; ?> style="margin: 10px 0px;">
                <tr>
                    <td width="150" style="color: #999999;">Имя пользователя:</td>
                    <td><?php echo $row['username']; ?></td>
                </tr>
                <tr>
                    <td width="150" style="color: #999999;">Дата опубликования:</td>
                    <td><?php echo $row['dt']; ?></td>
                </tr>
                <tr>
                    <td colspan="2" style="color: #999999;">---------------------------------------------------------------</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <?php echo $row['msg']; ?>
                        <br>
                    </td>
                </tr>

            </table>
            <?php
            $c++;
        }

        if ($c==0) // если ни одной записи не встретилось
            echo "Гостевая книга пуста!<br>";


        ?>


        <br>
        <h3>Добавить сообщение</h3>
        <!-- форма отправки сообщения -->

        <!-- проверка заполнения формы -->
        <script>
            function splash()
            {
                if (document.myForm.username.value  =='')
                {
                    alert ("Заполните имя пользователя!");
                    return false;
                }

                if (document.myForm.msg.value  =='')
                {
                    alert ("Заполните текст сообщения!");
                    return false;
                }

                return true;
            }
        </script>

        <!-- код формы -->
        <form name="myForm" action="action.php" method="post" onSubmit="return splash();">
            <input type="hidden" name="action" value="add">
            <table border="0">
                <tr>
                    <td width="160">
                        Имя пользователя:
                    </td>
                    <td>
                        <input name="username" style="width: 300px;">
                    </td>
                </tr>
                <tr>
                    <td width="160" valign="top">
                        Сообщение:
                    </td>
                    <td>
                        <textarea name="msg" style="width: 300px;"></textarea>
                    </td>
                </tr>
                <tr>
                    <td width="160">
                        &nbsp;
                    </td>
                    <td>
                        <input type="submit" value="Отправить сообщение">
                    </td>
                </tr>
            </table>
        </form>

    </div>
<div class="footer">
    <div class="footer__copyright">Copyright 2019 Научно-техническая фирма “ЭНЕРГОМАШ-инжиниринг”. Все права защищены.</div>
</div>
</body>
</html>