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
    <title>О Нас</title>
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
            <section class="sect21">
                <div class="container">
                    <h2>КТО <span>МЫ</span></h2>
                </div>
                <div class="ktomi-block" style="background: rgba(0, 0, 0, 0.02);">
                    <div class="container">
                        <hr>
                        <p>"Лес и ветер" это не только туристический проект. Мы стараемся делать путешествия там, где никого кроме нас нет. Это далекие уголки той России, которую городские, цивилизационные изменения коснулись в последнюю очередь и там, где эти изменения еще не уничтожили живую старинную культуру, где близость к прошлому, к настоящности простой жизни максимальная. </p>
                        <p>И в этой связи мы с самого начала приняли решение не изменять удивительную, заповедную и такую хрупкую среду далеких деревень новым, а органично встроиться в существующий контекст, стараясь как-то созидательно и на пользу потрудиться в этих землях.</p>
                        <p>Нам важно, чтоб с нами вместе работали чудесные местные, деревенские, которым так много благодарны за то, что они привнесли в нашу жизнь. И получилось, что Лес и ветер это и про развитие отдаленных деревень тоже. Все больше местных работают с нами, жизнь чуточку, но стала меняться, кому-то это приносит дополнительный доход, кому-то может даже основной, для кого-то постоянные встречи с теми, кто по-настоящему интересуется этим особым, будто затерянным миром глухих деревень и малоизвестных культур оказались нужны и радостны.</p>
                        <p>К нам все чаще приезжают те, для кого это все дело становится близким и они готовы вернуться, чтоб сделать что-то полезное для этих людей и этих мест. Мы стараемся привлечь внимание к тому, что деревни вымирают, культура, некогда живая и разнообразная, переходит в предания, распадается, как оставленные черные избы. Но кое-чего сделать можно. И планы такие у нас есть…, достаточно скоро об этом еще расскажем)</p>
                        <p>То, что сейчас осталось еще в глухих северных деревнях, можно сохранить. Здесь в серых избах, в русских печах, в морщинках стариков и в крепких руках их детей живет настоящая, самая взаправдашняя культура. Сделать так, чтоб она еще жила, чтоб другие люди видели и знали - как это сейчас? Сделать так, чтоб кто-то не уехал, а иные может быть даже и вернулись... Это сложная, на грани утопии задача, но прошло полгода нашей работы и стало ясно, что это более реально, чем кажется.</p>
                        <p>В сохранении памяти, в развитии этих земель, во привлечении внимания к ним, к сложностям и необходимости поиска решений мы видим нашу такую вот отличающееся от коммерческой задачу :)
                        </p>
                        <br>
                    </div>
                </div>
            </section>
            <section class="sect20">
                <div class="container">
                    <h2>О НАС В <span>СМИ</span></h2>
                    <div class="flex">
                        <div class="block-smi">
                            <img src="./assets/img/мост 2 1.png">
                            <h3>Люди леса</h3>
                            <p>plus-one.ru</p>
                            <a href="#"><img src="./assets/img/Group 6.png"></a>
                        </div>
                        <div class="block-smi">
                            <img src="./assets/img/photo-2020-11-30-18-17-05 1.png">
                            <h3>Музей под Винницами</h3>
                            <p>paperpaper.ru</p>
                            <a href="#"><img src="./assets/img/Group 6.png"></a>
                        </div>
                        <div class="block-smi">
                            <img src="./assets/img/лого.png">
                            <h3>Анькины тропы</h3>
                            <p>ЛенТВ24</p>
                            <a href="#"><img src="./assets/img/Group 6.png"></a>
                        </div>
                        <div class="block-smi">
                            <img src="./assets/img/радио.png">
                            <h3>Выпуск на радио</h3>
                            <p>radio_metro</p>
                            <a href="#"><img src="./assets/img/Group 6.png"></a>
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
