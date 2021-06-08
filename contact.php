<?php	
	require "./assets/less/lessc.inc.php";	
	function autoCompileLess($inputFile, $outputFile) {
	  // load the cache
	  $cacheFile = $inputFile.".cache";
	  if (file_exists($cacheFile)) {
		$cache = unserialize(file_get_contents($cacheFile));
	  } else {
		$cache = $inputFile;
	  }
	  $less = new lessc;
	  $newCache = $less->cachedCompile($cache);
	  if (!is_array($cache) || $newCache["updated"] > $cache["updated"]) {
		file_put_contents($cacheFile, serialize($newCache));
		file_put_contents($outputFile, $newCache['compiled']);
	  }
	}
	autoCompileLess('./assets/less/style.less', './assets/css/style.css');
// class="col-xs-6 wow fadeIn" data-wow-delay="0.3s" data-wow-duration="0.6s"
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Контакты</title>
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="./assets/css/style.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="./assets/js/smartmenus/css/sm-core-css.css" />
</head>

<body>
    <div class="wrapper">
        <div class="c-cont">
            <header style="background: rgba(0, 0, 0, 0.45); padding-bottom: 15px;">
                <div class="logo">
                    <a href="http://santino-test.ru"><img src="./assets/img/logo.png" alt=""></a>  
                </div>
                <div class="header__menu">
                    <nav class="main-nav main-nav-dop" role="navigation">
                        <input id="main-menu-state" type="checkbox">
                        <label class="main-menu-btn" for="main-menu-state">
                            <span class="main-menu-btn-icon">Toggle main menu visibility</span>
                        </label>
                        <ul id="main-menu" class="sm sm-clean">
                            <li>
                                <a href="http://santino-test.ru">Главная</a>
                                <a href="http://santino-test.ru/two.php">Путешествие в страну вепсов</a>
                                <a href="#">Нетуристический Кольский </a>
                                <a href="http://santino-test.ru/onas.php">О нас</a>
                                <a href="http://santino-test.ru/contact.php">Контакты</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </header>
            <section class="sect22">
                <div class="container">
                    <h2>ПОЗВОНИТЕ <span>ИЛИ НАПИШИТЕ</span></h2>
                </div>
                <div class="contact">
                    <div class="container">
                        <hr>
                        <div class="flex">
                            <div class="contact-block">
                                <div class="block__one">
                                    <h2>Илья Желтяков и Настя Полухина</h2>
                                    <p>
                                        +7 911 9191641<br>
                                        +7904 6186055<br>
                                        lesiveter@gmail.com
                                    </p>
                                </div>
                                <div class="block__two">
                                    <h2>АДРЕС НАШЕЙ ИЗБЫ</h2>
                                    <p>Ленинградская область, Подпорожский район, Винницкое сельское поселение, деревня Средняя, ул. Зеленая 8</p>
                                </div>
                                <a href="#"><svg width="101" height="16" viewBox="0 0 101 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M100.707 8.70711C101.098 8.31658 101.098 7.68342 100.707 7.29289L94.3431 0.928932C93.9526 0.538408 93.3195 0.538408 92.9289 0.928932C92.5384 1.31946 92.5384 1.95262 92.9289 2.34315L98.5858 8L92.9289 13.6569C92.5384 14.0474 92.5384 14.6805 92.9289 15.0711C93.3195 15.4616 93.9526 15.4616 94.3431 15.0711L100.707 8.70711ZM0 9H100V7H0V9Z" fill="black"/></svg></a>
                            </div>
                            <div class="contact-block">
                                <div class="block__one">
                                    <h2>наш офис</h2>
                                    <p>Санкт-Петербург, Костромской пр., д. 39, оф. 10</p>
                                </div>
                                <div class="block__two">
                                    <img src="./assets/img/Rectangle 4.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer>
                <div class="container">
                    <div class="flex">
                        <div class="footer-block">
                            <img src="./assets/img/ЛОГО (1).png">
                        </div>
                        <div class="footer-block">
                            <h2>Дополнительная информация</h2>
                            <div class="footer-ip--1">
                                <p>ИП Желтаков И. А.</p>
                                <p>ИНН 780243461660</p>
                                <p>ОГРНИП 316784700157717</p>
                            </div>
                            <div class="footer-ip--2">
                                <p>ИП Полухина А. Д.</p>
                                <p>ИНН 782577098880</p>
                                <p>ОГРНИП 320784700148740</p>
                            </div>
                        </div>
                        <div class="footer-block footer-block--dop">
                            <div class="social">
                                <h2>Мы есть в соц сетях</h2>
                                <div class="flex">
                                    <a href="https://www.facebook.com/LesiVeter"><img src="./assets/img/facebook.png"></a>
                                    <a href="#"><img src="./assets/img/Whatsapp.png"></a>
                                    <a href="https://vk.com/vepsariy"><img src="./assets/img/Vk.png"></a>
                                    <a href="#"><img src="./assets/img/Telegram.png"></a>
                                    <a href="https://www.instagram.com/les.i.veter/"><img src="./assets/img/Instagram.png"></a>
                                </div>
                            </div>
                            <div class="footer-number">
                                <h2>Позвоните нам</h2>
                                <div class="flex">
                                    <p>8(945)334-21-34</p>
                                    <a href="tel:+89453342134">Позвонить</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        
                
    </div>
    <div class="md-modal md-effect-1" id="modal-1">
        <div class="md-content">
            <h3>Модальные окна</h3>
            <div>
                <p> Это модальное окно. Вы можете выполнять следующие действия с ним:</p>
                <ul>
                    <li><strong>Читать:</strong> модальные окна, вероятно, несут важную текстовую информацию, так что не забудьте прочитать то, что в них написано.</li>
                    <li><strong>Смотреть:</strong> модальные окна несут визуальную информацию, на которую приятно смотреть.</li>
                    <li><strong>Закрыть:</strong> нажмите на кнопку, чтобы закрыть модальное окно.</li>
                </ul>
                <button class="md-close">Закрыть!</button>
            </div>
        </div>
    </div>
    <div class="md-overlay"></div><!-- the overlay element -->
    <!-- classie.js by @desandro: https://github.com/desandro/classie -->
    <script src="./assets/js/classie.js"></script>
    <script src="./assets/js/modalEffects.js"></script>
    <!-- for the blur effect -->
    <!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->
    <script>
        // this is important for IEs
        var polyfilter_scriptpath = './assets/js/';
    </script>
    <script src="./assets/js/cssParser.js"></script>
    <script src="./assets/js/css-filters-polyfill.js"></script>
    <script src="./assets/js/jquery-1.11.1.min.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/script.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="./assets/js/smartmenus/jquery.smartmenus.min.js"></script>
</body>

</html>
