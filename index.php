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
    <title>Лес и ветер</title>
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="./assets/css/style.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="./assets/js/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="./assets/js/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="./assets/js/smartmenus/css/sm-core-css.css" />
</head>

<body>
    <div class="wrapper">
        <div class="c-cont">
            <header>
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
            <section class="sect1">
                <div class="your-class">
                    <div data-parent="Автор фото: Иванов Иван"><img src="./assets/img/bg5.jpg" alt=""></div>
                    <div data-parent="Автор фото: Иванов Ива"><img src="./assets/img/bg4.jpg" alt=""></div>
                    <div data-parent="Автор фото: Иванов Ив"><img src="./assets/img/bg6.jpg" alt=""></div>
                    <div data-parent="Автор фото: Иванов И"><img src="./assets/img/bg2.jpg" alt=""></div>
                    <div data-parent="Автор фото: Иванов"><img src="./assets/img/bg7.jpg" alt=""></div>
                </div>
                <div class="news__dots"></div>
                <div class="all-cont">
                    <div class="content">
                        <div class="texts">
                            <h1>Авторские Путешествия<br>по далекой России</h1>
                            <ul>
                                <li>Самые нетуристические удаленные края</li>
                                <li>Проживание в старинной настоящей русской избе</li>
                                <li>Встречи с местными жителями, с хранителями истории</li>
                                <li>Абсолютный отрыв от города и суеты</li>
                            </ul>
                        </div>
                        <div class="block-form">
                            <h2>Узнайте о <strong>ближайших</strong> пушетествиях
                                и получите <span>скидку 10%</span>
                            </h2>
                            <form class="input-b" action="./mail_1.php" method="post">
                                <input type="text" placeholder="Номер телефона" name="tell">
                                <button class="preview-block__btn custom-btn">Узнать</button>
                                <div class="check-form">
                                    <p>Нажимая на кнопку, вы даете <a href="http://santino-test.ru/personal.php">согласие на обработку своих персональных данных</a></p>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="down-block">
                        <div class="left">
                            <a href="https://vk.com/vepsariy">Вконтакте</a>
                            <a href="https://www.instagram.com/les.i.veter/">Instagram</a>
                            <a href="#">Telegram</a>
                        </div>
                        <div class="right bounce-2">
                            <a href="#sect2">Начать путешествие
                                <svg id="SVGDoc" width="18" height="10" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:avocode="https://avocode.com/" viewBox="0 0 18 10">
                                    <defs></defs>
                                    <g>
                                        <g>
                                            <image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAAKCAYAAAC5Sw6hAAAA5klEQVQoU6XSvyuFYRQH8M+ZrAYGk8GPRWG8myKLSRHCapM/6g6S+AOulNFGmf0oK8WgxHL06L11vV6u8uzn8/2e0xOZGRGR/vmiPp+Z43iPiPt+dmYOYhRXX6DMHME5XrEZEZc/YZk5hDZaWK5DwzjDFG6wFhEXDa0LcoAFvGCuabUJHGIWd1jpbZaZJawg83jEdkR0vkElPTPHcIwZ3GK1YNU6+1jEM9Yj4qTMNEIVVo5esGlcYw+7WMJD1eQT+RXqaXZUrfmGATxho9vkT1BDs3KTrTrSt1E3LTMnsYNORJw2fYkPQ3VUc0pz8McAAAAASUVORK5CYII=" width="18" height="10" transform="matrix(1,0,0,1,0,0)"></image>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sect2" id="sect2">
                <div class="container">
                    <div class="items">
                        <div data-parent="Автор фото: Иванов Иван" class="item">
                            <img src="./assets/img/1.jpg" alt="">
                            <div class="texts">
                                <h1>Путешествие в глухие деревни Вепсского леса</h1>
                                <div class="podtitle">
                                    <h2>Карелия, Онежское озеро, Лен. область, Вологодчина, Россия</h2>
                                    <button class="one-btn">4 дня</button>
                                    <button class="two-btn">5 дней</button>
                                </div>
                                <p> Мы задумали его как душевное погружение в скрытое от городов деревенское бытие. Между Ладожским и Онежским озерами, в чаще густых лесов живет малочисленный народ – вепсы. Мы встретимся с нетронутой человеком природой, с глухими вепсскими деревеньками, туманами, старинными деревянными Храмами. Мы повстречаем местных и очень настоящих, простых людей, которые покажут свой мир.</p>
                                <ul>
                                    <li><span>Живем в русской, старинной, уютной избе на вершине горы</span></li>
                                    <li><span>Старт и финиш путешествия - Санкт-Петербург</span></li>
                                    <li><span>Группа 5-8 человек</span></li>
                                    <li><span>Знакомство с культурой вепсов</span></li>
                                    <li><span>Главные локации: глухие лесные деревни, деревянные русские Храмы, заброшенный маяк, Онежское озеро, природный парк Вепсский лес</span></li>
                                    <li><span>Мастер-классы с кузнецом, местной мастерицей кукол</span></li>
                                    <li><span>Деревенская натуральная еда с традиционными блюдами вепсской кухни</span></li>
                                </ul>
                                <h3 class="ttk">22 000 ₽<span>/1 человек</span></h3>
                                <button class="btn-go preview-block__btn custom-btn" onclick="window.location.href = 'http://santino-test.ru/two.php';">Перейти на страницу<br>путешествия</button>
                            </div>
                        </div>
                        <div data-parent="Автор фото: Иванов Иван" class="item">
                            <img src="./assets/img/DSC_5184а.jpg" alt="">
                            <div class="texts">
                                <h1>Нетуристический Кольский. Путь поморов</h1>
                                <div class="podtitle">
                                    <h2>Кольский полуостров, Россия</h2>
                                    <button class="one-btn">7 дней</button>
                                </div>
                                <p>Экспедиция на военных грузовиках вдоль Белого моря. Мы едем туда, где вообще нет дорог, нет туристов, куда только вертолетом. Эта прекрасная, суровая земля завораживает и забирает. Удивительные, умопомрачительные пейзажи, Студеное море, семужьи реки, деревянные церкви, вкуснейшая рыба, северное сияние, необыкновенные люди, северяне, поморы, и что-то, что не объяснить словами, что обнимает сердце...</p>
                                <ul>
                                    <li><span>Старт и финиш - город Кандалакша</span></li>
                                    <li><span>200 км по берегу Белого моря. Никаких дорог – настоящая экспедиция</span></li>
                                    <li><span>Ловим северную рыбу, готовим на огне, пробуем поморские блюда</span></li>
                                    <li><span>Главные локации: Поморские деревни, труднодоступный военный маяк, рыбацкие дома (тОни), Белое море, русские деревянные церкви, самый большой водопад Кольского полуострова, самая северная пустыня, прекрасные реки и каньоны, тайга и тундра крайнего Севера, будем один-на один с Севером</span></li>
                                    <li><span>Группа 5-7 человек</span></li>
                                </ul>
                                <h3>55 000 ₽<span>/1 человек</span></h3>
                                <button class="btn-go preview-block__btn custom-btn">Перейти на страницу<br>путешествия</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sect3">
                <div class="container">
                    <h1>Получи незабываемые, красочные<br><span>фотографии</span> своего путешествия!</h1>
                    <h2>Невероятно красивые кадры Вашего путешествия в комплекте с Вашим туром.<br>Качество наших фотографий вы можете оценить в <a href="">нашем instagram.</a></h2>
                    <div class="items">
                        <div class="item">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img src="./assets/img/sl1.jpg" alt=""></div>
                                    <div class="swiper-slide"><img src="./assets/img/sl2.jpg" alt=""></div>
                                    <div class="swiper-slide"><img src="./assets/img/les.i.veter_193292399_173748894681758_8725184415270167551_n.jpg" alt=""></div>
                                    <div class="swiper-slide"><img src="./assets/img/les.i.veter_193568020_322550442662093_7800293043940018456_n.jpg" alt=""></div>
                                    <div class="swiper-slide"><img src="./assets/img/sl5.png" alt=""></div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="button-next"></div>
                                <div class="button-prev"></div>
                            </div>
                        </div>
                        <div class="right">
                            <div class="phone">
                                <img src="./assets/img/phones.png" alt="">
                            </div>
                            <img src="./assets/img/sl2.jpg" alt="">
                            <img src="./assets/img/les.i.veter_193292399_173748894681758_8725184415270167551_n.jpg" alt="">
                            <img src="./assets/img/les.i.veter_193568020_322550442662093_7800293043940018456_n.jpg" alt="">
                            <img src="./assets/img/sl5.png" alt="">
                        </div>
                    </div>
                    <button class="preview-block__btn custom-btn" onclick="window.location.href = 'https://www.instagram.com/les.i.veter/';">Наш инстаграм</button>
                </div>
            </section>
            <section class="sect4">
                <div class="container">
                    <div class="left">
                        <h1>О клубе "Лес и ветер"</h1>
                        <h2>"Лес и ветер" это не только туристический проект. Мы стараемся делать
                            путешествия там,где никого кроме нас нет. Это далекие уголки той России,
                            которую городские, цивилизационные изменения коснулись в последнюю
                            очередь и там, где эти изменения еще не уничтожили живую старинную
                            культуру, где близость к прошлому, к настоящности простой жизни
                            максимальная.</h2>
                        <p>И в этой связи мы с самого начала приняли решение не изменять
                            удивительную, заповедную и такую хрупкую среду далеких деревень
                            новым, а органично встроиться в существующий контекст, стараясь…</p>
                        <button class="preview-block__btn custom-btn" onclick="window.location.href = 'http://santino-test.ru/onas.php';">Подробнее&emsp;<svg id="SVGDoc" width="10" height="18" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:avocode="https://avocode.com/" viewBox="0 0 10 18">
                                <defs></defs>
                                <g>
                                    <g>
                                        <image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAASCAYAAABit09LAAAA8UlEQVQoU4XSuy4FURQG4G8VolVQaCQuhU7oNURBRwjCI3kJBXFL1ETiDQSt4wlIKJSSkTXZR8YxkzPlzJd/1l7/DqiqKrCMr4h4yHeDT4KEC7jHCLYj4qYLjuEU63jHQUTcNnGdWFLHcYZVfGK3iX9hA59jBW847OM/sOAJnGANH9hL/A82ko+xUWbeb4UF58GuMYqjrsRFXGAOz9hpmzHRFWbwWKOI3uCplwqaLklbEfGaozT3mEmXmMVTaajX33O/wilkbfPld1ljnTQIc+i7vBTYjIiX1q7LOibxHRHZSPvtafvQmTgMR17aiKiGwR+IvFf/ycRLGQAAAABJRU5ErkJggg==" width="10" height="18" transform="matrix(1,0,0,1,0,0)"></image>
                                    </g>
                                </g>
                            </svg></button>
                    </div>
                    <div class="right">
                        <img src="./assets/img/player-bg.jpg" alt="">
                        <button class="player">
                            <svg id="SVGDoc" width="24" height="26" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:avocode="https://avocode.com/" viewBox="0 0 24 26">
                                <defs></defs>
                                <desc>Generated with Avocode.</desc>
                                <g>
                                    <g>
                                        <title>Слой 61</title>
                                        <image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAaCAYAAACtv5zzAAABvklEQVRIS7WVzUocQRSFvxORbLL3JfIEvoFrnyIPEBGF+EMMmGhAEIUgSFAUxZ0oiAkkkE1CkGyCZKG4EhFFAv6ARkuOdIeZceyq7kkuDN3TVJ2v6t5TdQUQQngKfAA6/B84BBaAYUkn2bdKD4UQBDwHRhsUArAHvAIWJZ1VIRjwCHgBDBQIbAIjwBdJ12VA+Q76gJeRiVfAODAv6WcqpAwg19wB3gIrklyrwqgCyAU/A9OSlooIrQCs68J/AgYlfW8GahWQax44ZcCQpKNaUCrAlrWdY+H6jAFzua1TAX8A29m/lHDaeiV9TQWk7qAW/hvoTAWkrLrZmNFWAT587QX07qqAWMrOs7ttpCqgKGWrvoWBLUk3MYBX6ohZ1ON+2TnAR0mn+QqKAN6mbfk4AtgHpoBJSXZOXRQBvIonBbk4BpyO15K2HxoXS1GzeU6Hu9+EpLWYf8sCfKHNALOSLmPid8XLOlp/VvmH5lwAb4D3knZThGuL7EK6XbptNotldzJJ38oI/wX4JYTQBaw3CPzI2uhGre3KQu78HULwcX8G9ADO7busW92zXSVAPimE0GbvS/Id80+i7oT+D8AtmCevFnAtrPwAAAAASUVORK5CYII=" width="24" height="26" transform="matrix(1,0,0,1,0,0)"></image>
                                    </g>
                                </g>
                            </svg></button>
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
            <section class="sect5">
                <div class="container">
                    <h1>Отзывы</h1>
                    <h2>Наших клиентов</h2>
                    <div class="reviews-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card">
                                    <img src="./assets/img/pl1.png" alt="">
                                    <div class="content">
                                        <h4>Татьяна Самборская</h4>
                                        <h3>instagram <a href="https://www.instagram.com/tanyasamborskaya/">@tanyasamborskaya</a></h3>
                                        <p>
                                            Не думала и не гадала, что так проникнусь красотой этих северных мест и жизненным укладом вепсов. Погружение в деревенский быт было почти полным- жили в настоящей русской избе с печкой - лежанкой, парились в настоящей русской баньке, ели оловянными ложками из чугунков еду приготовленную в печи, чай кипятили в самоваре...
                                        </p>
                                        <a class="hid" href="">Подробнее&emsp;
                                            <svg id="SVGDoc" width="10" height="18" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:avocode="https://avocode.com/" viewBox="0 0 10 18">
                                                <defs></defs>
                                                <desc>Generated with Avocode.</desc>
                                                <g>
                                                    <g>
                                                        <title>Слой 65</title>
                                                        <image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAASCAYAAABit09LAAABR0lEQVQoU4XSTS9DQRTG8f+5N41EikpYtFKJl4WdsLchFrUrt17CR/IlLAhX6cKKSHwDwRYhoe2iEtp0hTtHps1tWr1Nz25mfnnmZOYItlQlfl5ectF6dWPitrH3r8SuE+fv80blBoih4tW81GU0LLwkTBA7QiQDfIiR3WouddWOG4m2hi5KY/KjxygrwJcY2WrHLRhivvVEYBmoiJG9EHdAi+N+edxxzSGwCnyKkW2Lu2CrjW8OQNcaPcNOJLR4uFDOYEwBGBBlPxIm8sUFI/jArMIDorku2ESaB5lGucOYXG0z/dQBR86Kiwp5YMomOU6wXs1OPttWWrCZJKegMwr3EhjPJoXv3ICjfmkycNV+25y9TtzAC5M64LD/NovrXAN11GRrXvox8q/t5uDZa9IJBn7rm8lKz+mJOuiZ2A+LHVpEtB/8AzXWgOiqnywTAAAAAElFTkSuQmCC" width="10" height="18" transform="matrix(1,0,0,1,0,0)"></image>
                                                    </g>
                                                </g>
                                            </svg></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img src="./assets/img/pl2.png" alt="">
                                    <div class="content">
                                        <h4>Наталья Краснова</h4>
                                        <h3>instagram <a href="https://www.instagram.com/natalia_krasnova_/">@natalia_krasnova_</a></h3>
                                        <p>
                                            Эмоций столько, что не могу пока их собрать в кучку))
                                            Хочу сказать огромное спасибо Насте, Илье и Серёже @les.i.veter за волшебные 4 дня!!! И спасибо нашей крутой компании! Вы супер 🤗.
                                            Это просто бомба поездка!
                                        </p>
                                        <a class="hid" href="">Подробнее&emsp;
                                            <svg id="SVGDoc" width="10" height="18" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:avocode="https://avocode.com/" viewBox="0 0 10 18">
                                                <defs></defs>
                                                <desc>Generated with Avocode.</desc>
                                                <g>
                                                    <g>
                                                        <title>Слой 65</title>
                                                        <image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAASCAYAAABit09LAAABR0lEQVQoU4XSTS9DQRTG8f+5N41EikpYtFKJl4WdsLchFrUrt17CR/IlLAhX6cKKSHwDwRYhoe2iEtp0hTtHps1tWr1Nz25mfnnmZOYItlQlfl5ectF6dWPitrH3r8SuE+fv80blBoih4tW81GU0LLwkTBA7QiQDfIiR3WouddWOG4m2hi5KY/KjxygrwJcY2WrHLRhivvVEYBmoiJG9EHdAi+N+edxxzSGwCnyKkW2Lu2CrjW8OQNcaPcNOJLR4uFDOYEwBGBBlPxIm8sUFI/jArMIDorku2ESaB5lGucOYXG0z/dQBR86Kiwp5YMomOU6wXs1OPttWWrCZJKegMwr3EhjPJoXv3ICjfmkycNV+25y9TtzAC5M64LD/NovrXAN11GRrXvox8q/t5uDZa9IJBn7rm8lKz+mJOuiZ2A+LHVpEtB/8AzXWgOiqnywTAAAAAElFTkSuQmCC" width="10" height="18" transform="matrix(1,0,0,1,0,0)"></image>
                                                    </g>
                                                </g>
                                            </svg></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img src="./assets/img/pl3.png" alt="">
                                    <div class="content">
                                        <h4>Ольга</h4>
                                        <h3>instagram <a href="https://www.instagram.com/olga.kononenko.102/">@olga.kononenko.102</a></h3>
                                        <p>
                                            Не знаю в какую воронку времени я провалилась, но мне и правда кажется что я побывала в параллельной вселенной. Самое приятное в путешествии когда все идёт не по плану ,но от этого становится только лучше...</p>
                                        <a class="hid" href="">Подробнее&emsp;
                                            <svg id="SVGDoc" width="10" height="18" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:avocode="https://avocode.com/" viewBox="0 0 10 18">
                                                <defs></defs>
                                                <desc>Generated with Avocode.</desc>
                                                <g>
                                                    <g>
                                                        <title>Слой 65</title>
                                                        <image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAASCAYAAABit09LAAABR0lEQVQoU4XSTS9DQRTG8f+5N41EikpYtFKJl4WdsLchFrUrt17CR/IlLAhX6cKKSHwDwRYhoe2iEtp0hTtHps1tWr1Nz25mfnnmZOYItlQlfl5ectF6dWPitrH3r8SuE+fv80blBoih4tW81GU0LLwkTBA7QiQDfIiR3WouddWOG4m2hi5KY/KjxygrwJcY2WrHLRhivvVEYBmoiJG9EHdAi+N+edxxzSGwCnyKkW2Lu2CrjW8OQNcaPcNOJLR4uFDOYEwBGBBlPxIm8sUFI/jArMIDorku2ESaB5lGucOYXG0z/dQBR86Kiwp5YMomOU6wXs1OPttWWrCZJKegMwr3EhjPJoXv3ICjfmkycNV+25y9TtzAC5M64LD/NovrXAN11GRrXvox8q/t5uDZa9IJBn7rm8lKz+mJOuiZ2A+LHVpEtB/8AzXWgOiqnywTAAAAAElFTkSuQmCC" width="10" height="18" transform="matrix(1,0,0,1,0,0)"></image>
                                                    </g>
                                                </g>
                                            </svg></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img src="./assets/img/pl3.png" alt="">
                                    <div class="content">
                                        <h4>Мария</h4>
                                        <h3>facebook<a href="https://www.facebook.com/maria.tsiruleva">@maria.tsiruleva</a></h3>
                                        <p>
                                            Когда встречаешь примеры того, что 2020 – не только ужас-ужас и кошмар, хочется ими делиться. Только что побывала в туре по глухим деревням между Ладогой и Онегой и вернулась с довольно иррациональным выводом: пандемия этим местам пошла на пользу...</p>
                                        <a class="hid" href="">Подробнее&emsp;
                                            <svg id="SVGDoc" width="10" height="18" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:avocode="https://avocode.com/" viewBox="0 0 10 18">
                                                <defs></defs>
                                                <desc>Generated with Avocode.</desc>
                                                <g>
                                                    <g>
                                                        <title>Слой 65</title>
                                                        <image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAASCAYAAABit09LAAABR0lEQVQoU4XSTS9DQRTG8f+5N41EikpYtFKJl4WdsLchFrUrt17CR/IlLAhX6cKKSHwDwRYhoe2iEtp0hTtHps1tWr1Nz25mfnnmZOYItlQlfl5ectF6dWPitrH3r8SuE+fv80blBoih4tW81GU0LLwkTBA7QiQDfIiR3WouddWOG4m2hi5KY/KjxygrwJcY2WrHLRhivvVEYBmoiJG9EHdAi+N+edxxzSGwCnyKkW2Lu2CrjW8OQNcaPcNOJLR4uFDOYEwBGBBlPxIm8sUFI/jArMIDorku2ESaB5lGucOYXG0z/dQBR86Kiwp5YMomOU6wXs1OPttWWrCZJKegMwr3EhjPJoXv3ICjfmkycNV+25y9TtzAC5M64LD/NovrXAN11GRrXvox8q/t5uDZa9IJBn7rm8lKz+mJOuiZ2A+LHVpEtB/8AzXWgOiqnywTAAAAAElFTkSuQmCC" width="10" height="18" transform="matrix(1,0,0,1,0,0)"></image>
                                                    </g>
                                                </g>
                                            </svg></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img src="./assets/img/pl3.png" alt="">
                                    <div class="content">
                                        <h4>Гузель</h4>
                                        <h3>instagram<a href="https://www.instagram.com/gouzelle/">@gouzelle</a></h3>
                                        <p>
                                            Счастья полные штаны – спасибо за всё! Для тех, кто спрашивал, если хотите как я – вам сюда! @les.i.veter Всего пару часов от Питера и познаете культуру и места народа вепсы :__)) </p>
                                        <a class="hid" href="">Подробнее&emsp;
                                            <svg id="SVGDoc" width="10" height="18" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:avocode="https://avocode.com/" viewBox="0 0 10 18">
                                                <defs></defs>
                                                <desc>Generated with Avocode.</desc>
                                                <g>
                                                    <g>
                                                        <title>Слой 65</title>
                                                        <image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAASCAYAAABit09LAAABR0lEQVQoU4XSTS9DQRTG8f+5N41EikpYtFKJl4WdsLchFrUrt17CR/IlLAhX6cKKSHwDwRYhoe2iEtp0hTtHps1tWr1Nz25mfnnmZOYItlQlfl5ectF6dWPitrH3r8SuE+fv80blBoih4tW81GU0LLwkTBA7QiQDfIiR3WouddWOG4m2hi5KY/KjxygrwJcY2WrHLRhivvVEYBmoiJG9EHdAi+N+edxxzSGwCnyKkW2Lu2CrjW8OQNcaPcNOJLR4uFDOYEwBGBBlPxIm8sUFI/jArMIDorku2ESaB5lGucOYXG0z/dQBR86Kiwp5YMomOU6wXs1OPttWWrCZJKegMwr3EhjPJoXv3ICjfmkycNV+25y9TtzAC5M64LD/NovrXAN11GRrXvox8q/t5uDZa9IJBn7rm8lKz+mJOuiZ2A+LHVpEtB/8AzXWgOiqnywTAAAAAElFTkSuQmCC" width="10" height="18" transform="matrix(1,0,0,1,0,0)"></image>
                                                    </g>
                                                </g>
                                            </svg></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img src="./assets/img/pl3.png" alt="">
                                    <div class="content">
                                        <h4>Оля</h4>
                                        <h3>instagram<a href="https://www.instagram.com/olia_kh/">@olia_kh</a></h3>
                                        <p>
                                            Зимняя сказка в деревне на краю Ленинградской области в гостях у @les.i.veter и в чудесной компании команды «квадриль».
                                            Заснеженные деревья, холмы, просторы, уютная тёплая изба (с видовыми окошками), баней по-чёрному. Помимо всего этого...</p>
                                        <a class="hid" href="">Подробнее&emsp;
                                            <svg id="SVGDoc" width="10" height="18" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:avocode="https://avocode.com/" viewBox="0 0 10 18">
                                                <defs></defs>
                                                <desc>Generated with Avocode.</desc>
                                                <g>
                                                    <g>
                                                        <title>Слой 65</title>
                                                        <image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAASCAYAAABit09LAAABR0lEQVQoU4XSTS9DQRTG8f+5N41EikpYtFKJl4WdsLchFrUrt17CR/IlLAhX6cKKSHwDwRYhoe2iEtp0hTtHps1tWr1Nz25mfnnmZOYItlQlfl5ectF6dWPitrH3r8SuE+fv80blBoih4tW81GU0LLwkTBA7QiQDfIiR3WouddWOG4m2hi5KY/KjxygrwJcY2WrHLRhivvVEYBmoiJG9EHdAi+N+edxxzSGwCnyKkW2Lu2CrjW8OQNcaPcNOJLR4uFDOYEwBGBBlPxIm8sUFI/jArMIDorku2ESaB5lGucOYXG0z/dQBR86Kiwp5YMomOU6wXs1OPttWWrCZJKegMwr3EhjPJoXv3ICjfmkycNV+25y9TtzAC5M64LD/NovrXAN11GRrXvox8q/t5uDZa9IJBn7rm8lKz+mJOuiZ2A+LHVpEtB/8AzXWgOiqnywTAAAAAElFTkSuQmCC" width="10" height="18" transform="matrix(1,0,0,1,0,0)"></image>
                                                    </g>
                                                </g>
                                            </svg></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img src="./assets/img/pl3.png" alt="">
                                    <div class="content">
                                        <h4>Елизавета</h4>
                                        <h3>instagram<a href="https://www.instagram.com/st_antariksha/">@st_antariksha</a></h3>
                                        <p>
                                            Старый заброшенный маяк Самбо, Онего, поездка на тракторе, старинные деревянные церкви, поиски клюквы и какой-то щенячий восторг от путешествия с душевными людьми. @les.i.veter Спасибо вам</p>
                                        <a class="hid" href="">Подробнее&emsp;
                                            <svg id="SVGDoc" width="10" height="18" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:avocode="https://avocode.com/" viewBox="0 0 10 18">
                                                <defs></defs>
                                                <desc>Generated with Avocode.</desc>
                                                <g>
                                                    <g>
                                                        <title>Слой 65</title>
                                                        <image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAASCAYAAABit09LAAABR0lEQVQoU4XSTS9DQRTG8f+5N41EikpYtFKJl4WdsLchFrUrt17CR/IlLAhX6cKKSHwDwRYhoe2iEtp0hTtHps1tWr1Nz25mfnnmZOYItlQlfl5ectF6dWPitrH3r8SuE+fv80blBoih4tW81GU0LLwkTBA7QiQDfIiR3WouddWOG4m2hi5KY/KjxygrwJcY2WrHLRhivvVEYBmoiJG9EHdAi+N+edxxzSGwCnyKkW2Lu2CrjW8OQNcaPcNOJLR4uFDOYEwBGBBlPxIm8sUFI/jArMIDorku2ESaB5lGucOYXG0z/dQBR86Kiwp5YMomOU6wXs1OPttWWrCZJKegMwr3EhjPJoXv3ICjfmkycNV+25y9TtzAC5M64LD/NovrXAN11GRrXvox8q/t5uDZa9IJBn7rm8lKz+mJOuiZ2A+LHVpEtB/8AzXWgOiqnywTAAAAAElFTkSuQmCC" width="10" height="18" transform="matrix(1,0,0,1,0,0)"></image>
                                                    </g>
                                                </g>
                                            </svg></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img src="./assets/img/pl3.png" alt="">
                                    <div class="content">
                                        <h4>Катя</h4>
                                        <h3>instagram<a href="https://www.instagram.com/kate_zadonskaya/">@kate_zadonskaya</a></h3>
                                        <p>
                                            @les.i.veter, Настя и Илья, спасибо Вам огромное! Эта поездка надолго останется в моем сердце  Вообще у нас собралась прекрасная компания, в чем я конечно не сомневалась, но и не ожидала, что будет так душевно! Всех обнимаю</p>
                                        <a class="hid" href="">Подробнее&emsp;
                                            <svg id="SVGDoc" width="10" height="18" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:avocode="https://avocode.com/" viewBox="0 0 10 18">
                                                <defs></defs>
                                                <desc>Generated with Avocode.</desc>
                                                <g>
                                                    <g>
                                                        <title>Слой 65</title>
                                                        <image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAASCAYAAABit09LAAABR0lEQVQoU4XSTS9DQRTG8f+5N41EikpYtFKJl4WdsLchFrUrt17CR/IlLAhX6cKKSHwDwRYhoe2iEtp0hTtHps1tWr1Nz25mfnnmZOYItlQlfl5ectF6dWPitrH3r8SuE+fv80blBoih4tW81GU0LLwkTBA7QiQDfIiR3WouddWOG4m2hi5KY/KjxygrwJcY2WrHLRhivvVEYBmoiJG9EHdAi+N+edxxzSGwCnyKkW2Lu2CrjW8OQNcaPcNOJLR4uFDOYEwBGBBlPxIm8sUFI/jArMIDorku2ESaB5lGucOYXG0z/dQBR86Kiwp5YMomOU6wXs1OPttWWrCZJKegMwr3EhjPJoXv3ICjfmkycNV+25y9TtzAC5M64LD/NovrXAN11GRrXvox8q/t5uDZa9IJBn7rm8lKz+mJOuiZ2A+LHVpEtB/8AzXWgOiqnywTAAAAAElFTkSuQmCC" width="10" height="18" transform="matrix(1,0,0,1,0,0)"></image>
                                                    </g>
                                                </g>
                                            </svg></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img src="./assets/img/pl3.png" alt="">
                                    <div class="content">
                                        <h4>Инна, Сергей</h4>
                                        <h3>instagram<a href="https://www.instagram.com/sobaki_priuta_nekrasovka/">@sobaki_priuta_nekrasovka</a></h3>
                                        <p>
                                            Из вепсских деревень мы привезли с собой короб домашних калитог, пирг, капустников, Ели потом, вспоминали уже родные, тихие деревеньки и тех прекрасных людей. Всем, кого трогает деревня очень рекомендую путешествие с @les.i.veter Мы поедем обязательно снова, в конце января – феврале…</p>
                                        <a class="hid" href="">Подробнее&emsp;
                                            <svg id="SVGDoc" width="10" height="18" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:avocode="https://avocode.com/" viewBox="0 0 10 18">
                                                <defs></defs>
                                                <desc>Generated with Avocode.</desc>
                                                <g>
                                                    <g>
                                                        <title>Слой 65</title>
                                                        <image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAASCAYAAABit09LAAABR0lEQVQoU4XSTS9DQRTG8f+5N41EikpYtFKJl4WdsLchFrUrt17CR/IlLAhX6cKKSHwDwRYhoe2iEtp0hTtHps1tWr1Nz25mfnnmZOYItlQlfl5ectF6dWPitrH3r8SuE+fv80blBoih4tW81GU0LLwkTBA7QiQDfIiR3WouddWOG4m2hi5KY/KjxygrwJcY2WrHLRhivvVEYBmoiJG9EHdAi+N+edxxzSGwCnyKkW2Lu2CrjW8OQNcaPcNOJLR4uFDOYEwBGBBlPxIm8sUFI/jArMIDorku2ESaB5lGucOYXG0z/dQBR86Kiwp5YMomOU6wXs1OPttWWrCZJKegMwr3EhjPJoXv3ICjfmkycNV+25y9TtzAC5M64LD/NovrXAN11GRrXvox8q/t5uDZa9IJBn7rm8lKz+mJOuiZ2A+LHVpEtB/8AzXWgOiqnywTAAAAAElFTkSuQmCC" width="10" height="18" transform="matrix(1,0,0,1,0,0)"></image>
                                                    </g>
                                                </g>
                                            </svg></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <img src="./assets/img/pl3.png" alt="">
                                    <div class="content">
                                        <h4>Егор</h4>
                                        <h3>instagram<a href="https://www.instagram.com/2starjew8/">@2starjew8</a></h3>
                                        <p>
                                            Это была супер поездка, супер команда и супер Илья! Всем рекомендую, уверен, что будущие поездки ребят будут сделаны с такой же любовью к своему делу. @les.i.veter</p>
                                        <a class="hid" href="">Подробнее&emsp;
                                            <svg id="SVGDoc" width="10" height="18" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:avocode="https://avocode.com/" viewBox="0 0 10 18">
                                                <defs></defs>
                                                <desc>Generated with Avocode.</desc>
                                                <g>
                                                    <g>
                                                        <title>Слой 65</title>
                                                        <image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAASCAYAAABit09LAAABR0lEQVQoU4XSTS9DQRTG8f+5N41EikpYtFKJl4WdsLchFrUrt17CR/IlLAhX6cKKSHwDwRYhoe2iEtp0hTtHps1tWr1Nz25mfnnmZOYItlQlfl5ectF6dWPitrH3r8SuE+fv80blBoih4tW81GU0LLwkTBA7QiQDfIiR3WouddWOG4m2hi5KY/KjxygrwJcY2WrHLRhivvVEYBmoiJG9EHdAi+N+edxxzSGwCnyKkW2Lu2CrjW8OQNcaPcNOJLR4uFDOYEwBGBBlPxIm8sUFI/jArMIDorku2ESaB5lGucOYXG0z/dQBR86Kiwp5YMomOU6wXs1OPttWWrCZJKegMwr3EhjPJoXv3ICjfmkycNV+25y9TtzAC5M64LD/NovrXAN11GRrXvox8q/t5uDZa9IJBn7rm8lKz+mJOuiZ2A+LHVpEtB/8AzXWgOiqnywTAAAAAElFTkSuQmCC" width="10" height="18" transform="matrix(1,0,0,1,0,0)"></image>
                                                    </g>
                                                </g>
                                            </svg></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="pagin" style="margin-top: 0px;">
                            <div class="btn-prev"></div>
                            <div class="btn-next"></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sect6">
                <div class="container">
                    <h1>Наш колектив</h1>
                    <h2>Команда “Лес и Ветер”</h2>
                    <div class="items">
                        <div class="item">
                            <img src="./assets/img/p1.png" alt="">
                            <h3>Илья Желтяков</h3>
                            <span>Директор клуба “Лес и Ветер”<br>автор тура</span>
                            <p>Max invented our company. He is the father
                                of our main goals and values. He has
                                founded first core members of our team and
                                helped them to show their unique talents in
                                work process.</p>
                        </div>
                        <div class="item">
                            <img src="./assets/img/p2.png" alt="">
                            <h3>Настя Полухина</h3>
                            <span>Управляющий клуба “Лес и Ветер”<br>автор тура</span>
                            <p>Max invented our company. He is the father
                                of our main goals and values. He has
                                founded first core members of our team and
                                helped them to show their unique talents in
                                work process.</p>
                        </div>
                        <div class="item">
                            <img src="./assets/img/p3.png" alt="">
                            <h3>Eva Stark</h3>
                            <span>Customer Support<br>луба “Лес и Ветер”</span>
                            <p>Max invented our company. He is the father
                                of our main goals and values. He has
                                founded first core members of our team and
                                helped them to show their unique talents in
                                work process.</p>
                        </div>
                    </div>
                    <button class="preview-block__btn custom-btn">Выбрать тур</button>
                </div>
            </section>
            <section class="sect7">
                <div class="container">
                    <div class="item">
                        <h1>Поехали с нами</h1>
                        <div class="text">
                            <p>Заполните простую форму и мы свяжемся с Вами в ближайшее время <br>
                            и будем готовы ответить на все Ваши вопросы. <br>
                            Уточнение цен, дат, деталей Вашего путешествия. <br>
                            До встречи в чарующей, прекрасной русской глуши!))</p>
                            <p></p>
                        </div>
                        <form action="./mail_1.php" method="post">
                            <div class="up">
                                <input class="one" type="text" placeholder="Номер телефона" name="tell">
                                <input class="two" type="text" placeholder="Ваше имя" name="name">
                            </div>
                            <input class="three" type="text" placeholder="Ваш e-mail" name="email">
                            <div class="check-form">
                                <p>Нажимая на кнопку, вы даете <a href="http://santino-test.ru/personal.php">согласие на обработку своих персональных данных</a></p>
                            </div>
                            <button class="preview-block__btn custom-btn">Отправить&emsp;
                                <svg id="SVGDoc" width="10" height="18" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:avocode="https://avocode.com/" viewBox="0 0 10 18">
                                    <image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAASCAYAAABit09LAAAA8UlEQVQoU4XSuy4FURQG4G8VolVQaCQuhU7oNURBRwjCI3kJBXFL1ETiDQSt4wlIKJSSkTXZR8YxkzPlzJd/1l7/DqiqKrCMr4h4yHeDT4KEC7jHCLYj4qYLjuEU63jHQUTcNnGdWFLHcYZVfGK3iX9hA59jBW847OM/sOAJnGANH9hL/A82ko+xUWbeb4UF58GuMYqjrsRFXGAOz9hpmzHRFWbwWKOI3uCplwqaLklbEfGaozT3mEmXmMVTaajX33O/wilkbfPld1ljnTQIc+i7vBTYjIiX1q7LOibxHRHZSPvtafvQmTgMR17aiKiGwR+IvFf/ycRLGQAAAABJRU5ErkJggg==" width="10" height="18" transform="matrix(1,0,0,1,0,0)"></image>
                                </svg></button>
                        </form>
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
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./assets/js/script.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="./assets/js/slick/slick.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            navigation: {
                nextEl: '.button-next',
                prevEl: '.button-prev',
            },
        });

    </script>
    <script>
        $(document).ready(function() {
            $('.one-btn').click(function() {
                $('.ttk').html("22 000 ₽<span>/1 человек</span>");
            });
            $('.two-btn').click(function() {
                $('.ttk').html("25 000 ₽<span>/1 человек</span>");
            });
        });

    </script>
    <script>
        var swiper = new Swiper('.reviews-container', {
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 1,
            loop: true,
            loopFillGroupWithBlank: true,
            navigation: {
                nextEl: '.btn-next',
                prevEl: '.btn-prev',
            },
            breakpoints: {
                1024: {
                  slidesPerView: 2,
                  spaceBetween: 30
                },
                768: {
                  slidesPerView: 1,
                  spaceBetween: 30
                },
                1920: {
                  slidesPerView: 3,
                  spaceBetween: 30
                },
                414: {
                  slidesPerView: 1,
                  spaceBetween: 30
                },
                375: {
                  slidesPerView: 1,
                  spaceBetween: 30
                },
                320: {
                  slidesPerView: 1,
                  spaceBetween: 30
                }
            }
        });

    </script>
    <script>
        $(document).on('click', '.player', function() {
            var $video = $('#video'),
                src = $video.attr('src');

            $video.attr('src', src + '&autoplay=1');
        });

    </script>
    <script>
        var slider = $(".your-class");
        var scrollCount = null;
        var scroll = null;

        slider
            .slick({
                vertical: true,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 10000,
                dots: true,
                appendDots: $('.news__dots'),
                customPaging: function(slider, i) {
                    var thumb = $(slider.$slides[i]).data();

                    return '0' + (i + 1);
                },
                dotsClass: 'news__dots-list',
                arrows: false,
            });

    </script>
    <script>
        $(function() {
            $(".one-btn").click(function() {
                $(".two-btn").removeClass("active");
                $(this).toggleClass("active");
            })
            $(".two-btn").click(function() {
                $(".one-btn").removeClass("active");
                $(this).toggleClass("active");
            })
        });

    </script>
    <script type="text/javascript" src="./assets/js/smartmenus/jquery.smartmenus.min.js"></script>
</body>

</html>
