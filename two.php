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
    <title>Путешествие в страну вепсов</title>
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="./assets/css/style.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="./assets/js/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="./assets/js/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="./assets/js/Magnific-Popup-master/dist/magnific-popup.css" />
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
                    <div class="head">
                        <!--
                        <div class="logo">
                            <img src="./assets/img/logo.png" alt="">
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
                                        <a href="#">Путешествие в страну вепсов</a>
                                        <a href="#">Нетуристический Кольский </a>
                                        <a href="http://santino-test.ru/onas.php">О нас</a>
                                        <a href="http://santino-test.ru/contact.php">Контакты</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        -->
                    </div>
                    <div class="content">
                        <div class="texts">
                            <h1>Путешесвия<br>по деревням</h1>
                            <span>Почувствуй возможность пережить настоящую трансформацию<br>
                                во время путешествия по глухим деревням россии и вернуться<br>
                                “другим человеком”, испытав тотальное погружение в<br>
                                атмосфру прошлого столетия.</span>
                        </div>
                        <div class="block-form">
                            <form action="./mail_1.php" method="post">
                                <h2>Узнайте о <strong>ближайших</strong> пушетествиях
                                    и получите <span>скидку 10%</span>
                                </h2>
                                <div class="input-b" >
                                    <input type="text" placeholder="Номер телефона" name="tell">
                                    <button class="preview-block__btn custom-btn">Узнать</button>
                                </div>
                                <div class="check-form">
                                    <p>Нажимая на кнопку, вы даете <a href="http://santino-test.ru/personal.php">согласие на обработку своих персональных данных</a></p>
                                </div>
                            </form>
                        </div>
                        <div class="items">
                            <div class="item">
                                <div class="icon">10%</div>
                                <div class="contentt">
                                    <div class="title">4 Ночи</div>
                                    <p>Цена со скидкой<br>18 000 р</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon">10%</div>
                                <div class="contentt">
                                    <div class="title">5 Ночей</div>
                                    <p>Цена со скидкой<br>22 500 р</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="down-block">
                        <div class="left">
                            <a href="https://vk.com/vepsariy">Вконтакте</a>
                            <a href="https://www.instagram.com/les.i.veter/">Instagram</a>
                            <a href="#">Telegram</a>
                        </div>
                        <div class="right bounce-2">
                            <a href="#sect16">Начать путешествие
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
            <section class="sect16">
                <div class="container">
                    <div class="top" id="sect16">
                        <div class="title">Самое важное о путешествии</div>
                        <div class="podtitle">Тут нужно что-то написать ибо один заголовок смотрится пустовато</div>
                        <div class="items">
                            <div class="item">
                                <div class="icon">
                                    <img src="./assets/img/p1.svg" alt="">
                                </div>
                                <div class="content">
                                    <div class="title">2 из 10</div>
                                    <div class="txt">Сложность путешествия</div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon">
                                    <img src="./assets/img/p2.svg" alt="">
                                </div>
                                <div class="content">
                                    <div class="title">8+</div>
                                    <div class="txt">Рекомендованный возраст</div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon">
                                    <img src="./assets/img/p3.svg" alt="">
                                </div>
                                <div class="content">
                                    <div class="title">0 рублей</div>
                                    <div class="txt">все трансферы и перемещения по маршруту»</div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon">
                                    <img src="./assets/img/p4.svg" alt="">
                                </div>
                                <div class="content">
                                    <div class="title">6-8</div>
                                    <div class="txt">Человек в группе</div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon">
                                    <img src="./assets/img/p5.svg" alt="">
                                </div>
                                <div class="content">
                                    <div class="title">0 кг</div>
                                    <div class="txt">вес необходимого груза, путешествуем налегке</div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon">
                                    <img src="./assets/img/p6.svg" alt="">
                                </div>
                                <div class="content">
                                    <div class="title">5 дней</div>
                                    <div class="txt">путешествия по глухим деревням</div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon">
                                    <img src="./assets/img/p7.svg" alt="">
                                </div>
                                <div class="content">
                                    <div class="title">7 старинных,</div>
                                    <div class="txt">деревянных церквей, заброшенный монастырь и одно языческое капище мы отыщем в лесах во время путешествия</div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="icon">
                                    <img src="./assets/img/p8.svg" alt="">
                                </div>
                                <div class="content">
                                    <div class="title">Еда</div>
                                    <div class="txt">Наш рацион – настоящие, вепсские, деревенские кушания</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="center">
                        <div class="title">Маршрут путешествия</div>
                        <iframe src="https://www.google.com/maps/d/embed?mid=1mcbSRxUPTU3xuy3K3srCfECNGpGJkB0Z" width="100%" height="480"></iframe>
                    </div>
                    <div class="bottom">
                        <div class="left">
                            <div class="swiper-container-three">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img src="./assets/img/p12.png" alt=""></div>
                                    <div class="swiper-slide"><img src="./assets/img/p11.png" alt=""></div>
                                    <div class="swiper-slide"><img src="./assets/img/p13.png" alt=""></div>
                                    <div class="swiper-slide"><img src="./assets/img/p14.png" alt=""></div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="button-next"></div>
                                <div class="button-prev"></div>
                            </div>
                            <div class="photos">
                                <img src="./assets/img/p11.png" alt="">
                                <img src="./assets/img/p13.png" alt="">
                                <img src="./assets/img/p14.png" alt="">
                            </div>
                        </div>
                        <div class="right">
                            <div class="title">Программа путешествия</div>
                            <div class="btns">
                                <button class="one-btn active" value="Click" onmousedown="viewDiv1()">1 день</button>
                                <button class="two-btn" value="Click" onmousedown="viewDiv2()">2 день</button>
                                <button class="three-btn" value="Click" onmousedown="viewDiv3()">3 день</button>
                                <button class="four-btn" value="Click" onmousedown="viewDiv4()">4 день</button>
                                <button class="five-btn" value="Click" onmousedown="viewDiv5()">5 день</button>
                            </div>
                            <p id="type1">В 10:00 мы встречаем вас у Московского вокзала в Петербурге. На комфортабельном микроавтобусе за 4 часа добираемся до деревни Ярославичи. По дороге остановимся попить чай с пирогами на берегу реки. По прибытии мы заселимся в колоритную старинную вепсскую избу, расположенную в живописном месте на горе над долиной реки Оять. Отсюда видна потрясающая панорама. Перед ужином мы спустимся в долину , где в очень милом сельском Доме культуры нас будет ждать староста деревни, она расскажет о вепсах, покажет свой маленький музей. После встречи общий
                                ужин - национальные вепсские кушания. И напоследок, мы отправимся на соседний холм в деревню Лашково, откуда открывается умопомрачительный вид... Полюбуемся, как долину реки и деревню затягивает закатный туман.
                                Перед сном можно будет попариться в вепсской
                                бане по-чёрному.</p>
                            <p id="type2">Завтракаем знаменитыми вепсскими калитками только что приготовленными в русской печи. Затем прогулка с гидом по Природному парку "Вепсский лес". Переправимся через реку Оять в маленькую деревеньку Чурручей, затем 3 км по лесу вдоль реки Оять. Посетим вепсское капище, скрытое в глубине леса.
                            Отправляемся в самые глухие деревни Вепсского леса, в одной из них мы посетим заброшенную деревянную школу. В деревне Шондовичи, где снимали фильм "Жили-были", мы погуляем по уютной деревне и перекусим в красивом месте у реки.
                            А также погуляем по живописной деревне Ладва. В Лаве в местно, атмосферном Сельском Доме культуры мы пообедаем супом из военного термоса.
                            Затем мы поедем в затерянную в лесах деревню Курба, где посетим самобытный музей вепсского быта.
                            После отправимся в свою избу на горе.
                            Будем ловить закат в деревенской тиши.
                            Вечером общий ужин.
                            Перед сном баня.</p>
                            <p id="type3">После завтрака отправимся в деревню Родионово. Дорога займёт около часа. Здесь на берегу Юксовского озера находится самая старая деревянная церковь в России — ровесница Колумба. В отличие от многих других старинных церквей, которые перевозили с места на место, эта церковь никогда не меняла своего расположения. В ней нет музея, однако местный житель специально для нас откроет двери этого уникального здания и позволит прикоснуться к истории.
                            После этого мы поедем в поселок Вознесенье, откуда на пароме переправимся через широченную реку Свирь. После — доберёмся до деревни Гимрека, где посмотрим Гиморецкий погост - удивительный по красоте деревянный ансамбль.
                            А затем нас ждёт небольшая (7 км) прогулка по берегу Онежского озера до соседней деревни Щелейки. По пути побываем на онежском маяке Самбой, он построен в 1923 году, можно будет подняться на него и увидеть Онего с высоты. Кстати, на берегу можно найти шунгит — целебный камень, который заберёте с собой в качестве сувенира. В Щелейках пообедаем и отправимся на экскурсию по деревянному Храму Дмитрия Солунского Мироточивого.</p>
                            <p id="type4">После завтрака – прогулка с гидом по окрестным деревням, по полям, лесам, в абсолютной тиши, по высоким холмам с умопомрачительными видами, по живописной реке Оять, мимо уютных деревенских домиков. Это будет очень размеренный день, день в которомы можно будет никуда не спешить, а просто раствориться в малолюдном пространстве далеких деревень. Побыть с самим собой, осознать увиденное и пережитое за последние 3 дня. К обеду мы спустимся в долину реки в соседнюю деревню.
                            После обеда мы поедем к местному деревенскому кузнецу в гости. Кузнец расскажет нам – чем занимается деревенский кузнец и будет возможность самим что-нибудь сделать из раскалённого металла на память.
                            Вечером общий ужин - простая деревенская кухня и банька по-черному.</p>
                            <p id="type5">После завтрака - в деревню Великий двор. Три года назад здесь поселился и сделал свою арт-резиденцию современный художник Дмитрий Каварга. Среди глухих лесов высится огромная индустриальная инсталляция, олицетворяющая путь современного отшельника. Удивительное столкновение пространств и времён. И такое тоже есть в таинственной стране вепсов.
                            Заедем в едем деревню Игнатовское, где чудесная мастерица проведет для нас мастер - класс по изготовлению вепсской куклы. Под её чутким руководством, вы сами сделаете себе на память добрую вепсскую куклу.
                            А после прощального обеда, вы отправитесь обратно - в Петербург.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sect11">
                <div class="container">
                    <h1>Узнайте о <span>ближайших</span> путешествиях<br>и получите <span>скидку 10%</span></h1>
                    <div class="form">
                        <form action="./mail_1.php" method="post">
                            <input type="text" placeholder="Ваш номер" name="tell">
                            <button class="preview-block__btn custom-btn">Узнать</button>
                            <div class="check-form">
                                <p>Нажимая на кнопку, вы даете <a href="http://santino-test.ru/personal.php">согласие на обработку своих персональных данных</a></p>
                            </div>
                        </form>
                    </div>
                    <div class="items">
                        <div class="item">
                            <div class="icon">10%</div>
                            <div class="content">
                                <div class="title">4 Ночи</div>
                                <p>Цена со скидкой<br>18 000 р</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="icon">10%</div>
                            <div class="content">
                                <div class="title">5 Ночей</div>
                                <p>Цена со скидкой<br>22 500 р</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sect9">
                <div class="container">
                    <h1>Даты наших путешествий<br>весна - лето 2021</h1>
                    <p>Близжайшее путешествие по глухим деревням  <span class="blue">Вепсского леса</span> 07.04 - 12.04</p>
                    <div class="items">
                        <div class="item">
                            <h2>Март</h2>
                            <ul>
                                <li>05.03 / 08.03 - 4 дня</li>
                                <li>05.03 / 08.03 - 4 дня</li>
                                <li>05.03 / 08.03 - 4 дня</li>
                            </ul>
                        </div>
                        <div class="item">
                            <h2>Апрель</h2>
                            <ul>
                                <li>05.03 / 08.03 - 4 дня</li>
                                <li>05.03 / 08.03 - 4 дня</li>
                                <li>05.03 / 08.03 - 4 дня</li>
                            </ul>
                        </div>
                        <div class="item">
                            <h2>Май</h2>
                            <ul>
                                <li>05.03 / 08.03 - 4 дня</li>
                                <li>05.03 / 08.03 - 4 дня</li>
                                <li>05.03 / 08.03 - 4 дня</li>
                            </ul>
                        </div>
                        <div class="item">
                            <h2>Июнь</h2>
                            <ul>
                                <li>05.03 / 08.03 - 4 дня</li>
                                <li>05.03 / 08.03 - 4 дня</li>
                                <li>05.03 / 08.03 - 4 дня</li>
                            </ul>
                        </div>
                        <div class="item">
                            <h2>Июль</h2>
                            <ul>
                                <li>05.03 / 08.03 - 4 дня</li>
                                <li>05.03 / 08.03 - 4 дня</li>
                                <li>05.03 / 08.03 - 4 дня</li>
                            </ul>
                        </div>
                        <div class="item">
                            <h2>Август</h2>
                            <ul>
                                <li>05.03 / 08.03 - 4 дня</li>
                                <li>05.03 / 08.03 - 4 дня</li>
                                <li>05.03 / 08.03 - 4 дня</li>
                            </ul>
                        </div>
                        <div class="item">
                            <h2>Сентябрь</h2>
                            <ul>
                                <li>05.03 / 08.03 - 4 дня</li>
                                <li>05.03 / 08.03 - 4 дня</li>
                                <li>05.03 / 08.03 - 4 дня</li>
                            </ul>
                        </div>
                        <div class="item">
                            <h2>Октябрь</h2>
                            <ul>
                                <li>05.03 / 08.03 - 4 дня</li>
                                <li>05.03 / 08.03 - 4 дня</li>
                                <li>05.03 / 08.03 - 4 дня</li>
                            </ul>
                        </div>
                        <div class="item">
                            <h2>Ноябрь</h2>
                            <ul>
                                <li>05.03 / 08.03 - 4 дня</li>
                                <li>05.03 / 08.03 - 4 дня</li>
                                <li>05.03 / 08.03 - 4 дня</li>
                            </ul>
                        </div>
                        <div class="item">
                            <h2>Декабрь</h2>
                            <ul>
                                <li>05.03 / 08.03 - 4 дня</li>
                                <li>05.03 / 08.03 - 4 дня</li>
                                <li>05.03 / 08.03 - 4 дня</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sect10">
                <div class="container">
                    <div class="title">
                        <h1>Детали путешествия</h1>
                    </div>
                    <div class="left">
                        <div class="card">
                            <span><svg id="SVGDoc" width="32" height="29" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:avocode="https://avocode.com/" viewBox="0 0 32 29">
                                    <defs></defs>
                                    <desc>Generated with Avocode.</desc>
                                    <g>
                                        <g>
                                            <title>Слой 521</title>
                                            <image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAdCAYAAADLnm6HAAAE5klEQVRIS72Wa2zTVRjGf++/GxKk7QaBEbbWLIatgxkNBCWGCNtQAwZk0E5uaiTevkA0wxgFCQnRDzAlERIhOjUBFbeWBFASDWujxvhBAgjKyi1AW8ZFJLQdOLT9v+bfbkthTAZUz6f29PR5nvNenvNKcctxZ9oY9AtwD//f2pcYXvYgNZISeyCyUVReArpEWYXICcQUNZF86REDtbDUlCqElYCgujLhc68Wpz8aUyhVtDHpdb+XL9L+cJytsSYVbQTdm/C6J4jDHz0DjAKeSHhdu/ImoOW3QQ7D0QAME5UzcW+pHxG1+yOLBWlWOJD0uu63BEQAF6rzEz731nwJcASiS1De78FTjFlJb+lORyD2CqrrgD0Jr2vibQkobulwm4Y5Q0VLFGJctW1PLhh9IVe8M3B6PGquM6FI0PNi4+V4vfv4HQtw+GOvgq4FbDmESRVdmpzr/vRmEbwjAQ5/ZD7I590kZxXaBcYDTmtPDKmLzykL/puI2xewaU+hY3jJH4Ad2JVIpubyXHmX87NTxXqXYRXvJOBowuuq+E8EOAKxSaj+ZLVzQVdX0cVFYxI9RHZ/h0dIt1vfDVuq/FJ9+cn+RNgDkUZRacptwwF1gbM18piKfAOYCa8rN/8M23LUkRo8OG6Rmobe1znH/Wt/AhyByApUVqN0JHyu0gF3wdCWMyMMI3U+42jXmZbTH12rsMxy08SQriJmjLnabwT8JzyGFGw00Z3Jue53ByzAArT7o5sEXsyCyweCeVCFSag8k9lBV8S97rdv1gm5v/cvoEVtNEj6GrBVajirYyGFR/qQqOxI+MqevBXyjOjrndDecmqyGMbH3dV+MW0y73KD62AusOVyajJbhBIgpqpfJn3uT64hb/O8gMFMlHHAIIQopn5PgdHMlPajPWfF7o9GBcoEeSruLWuxt0afF+HDXgtVmZn0lX014JuFxj6AmlsgQ9zPktepbV/TE4FzwEhRfTzuc39rbTq3nXoU01acNvVcZ4PruwGT7x43FiNtdUD3U66bUUIYxhWgGtWFQHk33jvUhpdbKTgG3IuyPuFzLR0w2Y0OBj0xoBQ4h82YzpRD+/oca/M0ITR2708Ve2tkmYhY3g4qOxA9id5kGBEMIG0al7d3zvFkrTdUuQiVzdkGMauoORLuQx6srKT28GFCVbtQnQ66PxMqZ2t0mwr1t3p709aR6Kx/KPMOEPIEUWqAL6gNL7gB+WKQZmAvIs+imins3rHL0RqZJyLTVHCgqmBkxqgbLlEDJG3aDgQ6Z8/wZ84EPaeB0diM8Zipu1GjGWUDdeH1hCoXomIVprV2UBOeTchjmVVh3uY+gh5rHhhOQWok6cJZqH6UTStbEeZlU6M/UHM46yFBz1/5FmCFtBplCXXhDQQrvwaZ0RvBXPLd1SUYqbPXpOBW8983x1VrQF8DLlAbHpG9Za+IH6kNT+79T7DnrF7KXwpCY0ehpjXgWt20hbr2pzOfd1dMZNqRn3vJ2yqmI5n5wVrL8yfAggt5GlGastjahilvMS1szRAQqvCghvVovdFNfoja8Lj8CsgWl/Uavnldiv62Ci5nby8yuI6a/XlMQS5jm+dhDOYDEzClCFGL3Kr6Y6j4qWvPGlauD9xxEeYChKYW8Pt5A2dBITZzKLauQmxc5c8hV4gf6KKB3mf+H9QsQd0fI8n4AAAAAElFTkSuQmCC" width="32" height="29" transform="matrix(1,0,0,1,0,0)"></image>
                                        </g>
                                    </g>
                                </svg>Входит в стоимость</span>
                            <ul>
                                <li>- работа гида Клуба "Лес и ветер"</li>
                                <li>- групповой трансфер в обе стороны</li>
                                <li>- переезды по маршруту</li>
                                <li>- баня в каждом месте ночлега</li>
                                <li>- дрова для печи</li>
                                <li>- соленья из бабушкиных закруток</li>
                                <li>- проживание в настоящей избе</li>
                                <li>- питание: завтраки, обеды, ужины</li>
                                <li>- все экскурсии по программе</li>
                                <li>- все мастер-классы по программе</li>
                                <li>- билет на переправу через р. Свирь</li>
                                <li>- помощь и консультирование</li>
                                <li>- детский туристический рюкзак</li>
                                <li>- теплые сапоги из «пенки»</li>
                            </ul>
                        </div>
                        <div class="card">
                            <span><svg id="SVGDoc" width="32" height="30" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:avocode="https://avocode.com/" viewBox="0 0 32 30">
                                    <defs></defs>
                                    <desc>Generated with Avocode.</desc>
                                    <g>
                                        <g>
                                            <title>Слой 522</title>
                                            <image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAeCAYAAABNChwpAAAE70lEQVRYR7WWa2xUVRDHf3Pb5c0tVEqAdosEqkAfhsgjoRp8hBAwopHdChREo4REiaLxq0Ri4gc/aFRM1JhAoChptxIgQcVECGhAHopdilEQsLfIs6W7RaDd9o45d+82a6HQyjpfdu+cOTP/mTMvwaehNWdmiuXORslF1U3xM/IrIoAIekHI2tESyv85pdccYEectcBLGTHWGyXKmng4+KYRlZyIs1zhU++ecADkJIqA64HLDFmaVK+TFUrNf8Wa3xrK3y52pPEY6CSgKh4KLs2MwZ612BHna2COKt+1hoOPih1xzgMjRXVOLFy4M5MAcquO2wwcaDd3ahMVwWtG99DahmdFZZ1ANBYKlsnQiOMIFAjydCxUUJ0pAENrG+aLylZfXydQHg8Ff7QjzsvA+wiH4wuCU00EGoAgqovi4cLNvQUwuPrUKMnOGiHXs8+1Lh5zqfs9u8apRKhK8S3l4ZZwcLdd27gK1feAQ/FQcFqfAdjVzgQsPgDm+so7ELa4Elh55alRF9KB5GxpGE9Ch1kELl6uGGMc5Y4A5FSfHqdW1jFgwE0idRGXifGKYPOtonhHAOyIcwCYhnBJXX1BVOoRZiBeGQ9SqG0NBUP/CwA74hQBvxvlruisKwsK96QM2TUNCxH5wqv1Njc3Vjn2ck8g/nME7BpnLsIOYz8eCmalG8irvjCkzWprNTzLlSktFQVHegQQcVYDa4AT8VCwqNdJOOTL05Ms13t/RKz7Ywvyf0oZSS85bc/Ku1lVpGTHbDj6+PX+g7d1WIFt8XDBE70GYBTkRJyoQgngWCLLEp2JXy0JTBVLN6AMF9WvYuHCebcr5TlvrC+uH37PycbXZl7rE4D0KHQ3Yql7Naf54oQ/V0w9ezsA6ec3ALCrnVxEzWTMFeTcgGuBteefGfV36tKwyJkpLp0fgpSneKK6M6/ZefHEivI/UrzfYEQCZisUA/29qMHeYugaxd5zdu+EXa3S1yQQioWCtTd0uohTpGrlWZo4G6u4+1T6eRTeBl7toV98a8GqYkjmkx1xTMhGpcZjbm1jQafqGkXzwGrUdmv1rZKqO7Ao7AUe8PlmAP0AmN+JgClljyx4sBi+NwD+Akarsrw1HPysL+93E+OmFyz0PIO3EvDuFGhJyUXhY2CF/93RD0YbAJ8Di4AmFX09y5XTHYq3QGQLguWtU/8iFUQ61W0ZfH0f84razGEUpgIHfeMrS+Cj9Ev1EHLBOJiTxt8kA6ud/IDldbhBffXecjsOtlSMm+4DMJOvEjhcmgTTRXVQKXRNxo0C+zUJsMPzzgwZV7LeEYuHUGxvY7o1mXtuoKN9c9PC8c/5AI4DEwSWlyQ99egoLFNY73/uK4WZvry/pqUb+uRQYNjIuwZLwr0lADeRbWVpe2fzkqJ42vs2mdJVeKwMr2VTB4sFNvkyB0phRpp8OxDI2OIZhZPAOGBpKVRFYQmw0Te4vwTKzaZrvo9D/+vJyrgxwfqaB2keRYAFxqgF21yo6R72lGwdhAW89S9jEaiDWQK7uzmwqxQeSecdgkB/MI0rH9ieMQB+YpmterZv0CmBsZKW0PUw3YV1wGQjYyXPM0f10M/1co97U0WgcFjgKnAffgWYM4Uny2BrRgEYxbsge0Sy4z3fg2tHFF4pA2+jyjiAlNFfklGYayX3h35mGgrsKYFv0oH9A0otHi++PAcpAAAAAElFTkSuQmCC" width="32" height="30" transform="matrix(1,0,0,1,0,0)"></image>
                                        </g>
                                    </g>
                                </svg>Не входит в стоимость</span>
                            <ul>
                                <li>- Ж/Д и авиабилеты до Петербурга</li>
                                <li>- медицинская страховка</li>
                                <li>- личные расходы: поделки
                                    народных мастеров и мастериц,
                                    настоящие деревенские продукты
                                    от бабушек и дедушек</li>
                                <li>- аренда снаряжения: палки для
                                    ходьбы</li>
                            </ul>
                        </div>
                    </div>
                    <div class="right">
                        <div class="items">
                            <div class="item">
                                <div class="icon"><img src="./assets/img/icon1.svg" alt=""></div>
                                <div class="content">
                                    <span>Место отправления</span>
                                    <p>Своих гостей мы забираем на Московском вокзале в Петербурге. Утром, в 10:00. И на джипе или минивене отправляемся прямиком в глушь. С этого времени начинается...<a id="pop_1" href="#text-popup_1">Подробнее<svg id="SVGDoc" width="14" height="8" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:avocode="https://avocode.com/" viewBox="0 0 14 8">
                                                <defs></defs>
                                                <desc>Generated with Avocode.</desc>
                                                <g>
                                                    <g>
                                                        <title>Слой 519</title>
                                                        <image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAICAYAAADJEc7MAAABCUlEQVQoU5XQvUrDABSG4fckohg1iiBC1UFBXBy9ChfBoaC0SCfBqc7SoOAtCKKC4Fisi9Cll+ANCIJLU7VQwRpsm/TnSKS2EbJ45u85f4KqIKL8s2SQz6s5M1JZ74LrbS++x/VJ3L9YDV/XpNd6HsDJ/OucYXQegQcNzJS3m6hF8fzN20TTCs4ESYqSGk4sPo3ZjfEc6BEqpe5okP7aWqmGOIL2ELk2wRnCMKEq9p3roByLSqlnsuN1Fj6mzcqlqmZEuKrXqgfsb7T/wv5u9m3ZAU6AIhDemwY9/7T8LJurfhiLhT+TC26uj1G48HpkSS41f++Oh/21pwrlQwNjtu61T8kst6LP+ga152Rfueki+wAAAABJRU5ErkJggg==" width="14" height="8" transform="matrix(1,0,0,1,0,0)"></image>
                                                    </g>
                                                </g>
                                            </svg></a></p>
                                </div>
                            </div>
                            <div id="text-popup_1" class="white-popup mfp-hide">
                                <h2>Место отправления</h2>
                                <p>Своих гостей мы забираем на Московском вокзале в Петербурге. Утром, в 10:00. И на джипе или минивене отправляемся прямиком в глушь. С этого времени начинается путешествие, так как гид во на протяжении всего пути (около 4х часов) ведет подробный рассказ о тех местах, что мы проезжаем и о том, куда мы едем, о зачарованных Вепсских лесах, о самих вепсах, об истории, культуре, архитектуре, обычиях и особенностях жизненного уклада местных жителей и, соответственно гостей, которые ровно так же и будут жить ближайшие 4-5 дней.</p>
                            </div>
                            <div class="item">
                                <div class="icon"><img src="./assets/img/icon2.svg" alt=""></div>
                                <div class="content">
                                    <span>Что брать с собой</span>
                                    <p>Зимой нужно брать с собой теплые вещи, в которых при этом будет комфортно ходить. Ходить временами придется много, иногда будет скользко, иногда будут сугробы...<a id="pop_2" href="#text-popup_2">Подробнее<svg id="SVGDoc" width="14" height="8" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:avocode="https://avocode.com/" viewBox="0 0 14 8">
                                                <defs></defs>
                                                <desc>Generated with Avocode.</desc>
                                                <g>
                                                    <g>
                                                        <title>Слой 519</title>
                                                        <image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAICAYAAADJEc7MAAABCUlEQVQoU5XQvUrDABSG4fckohg1iiBC1UFBXBy9ChfBoaC0SCfBqc7SoOAtCKKC4Fisi9Cll+ANCIJLU7VQwRpsm/TnSKS2EbJ45u85f4KqIKL8s2SQz6s5M1JZ74LrbS++x/VJ3L9YDV/XpNd6HsDJ/OucYXQegQcNzJS3m6hF8fzN20TTCs4ESYqSGk4sPo3ZjfEc6BEqpe5okP7aWqmGOIL2ELk2wRnCMKEq9p3roByLSqlnsuN1Fj6mzcqlqmZEuKrXqgfsb7T/wv5u9m3ZAU6AIhDemwY9/7T8LJurfhiLhT+TC26uj1G48HpkSS41f++Oh/21pwrlQwNjtu61T8kst6LP+ga152Rfueki+wAAAABJRU5ErkJggg==" width="14" height="8" transform="matrix(1,0,0,1,0,0)"></image>
                                                    </g>
                                                </g>
                                            </svg></a></p>
                                </div>
                            </div>
                            <div id="text-popup_2" class="white-popup mfp-hide">
                                <h2>Что брать с собой </h2>
                                <p>Зимой нужно брать с собой теплые вещи, в которых при этом будет комфортно ходить. Ходить временами придется много, иногда будет скользко, иногда будут сугробы, иногда жижа и чвякля. Могут быть сильные (более 20,25 градусов) морозы, может быть ветер, ледяной дожь, снег, гроза, ураган и метель… Нужно быть морально, материально и физически быть готовы ко всему. Конечно, у нас есть на чердаке фуфайки и ватные штаны, есть шубы и мы можем дополнительно утеплить гостей, но лучше конечно позаботиться о себе самому. 
                                Термобелье, теплые носки, шарфы, горнолыжные костюмы, маски, непромокаемые куртки, теплая пижама – все это может пригодится (а может и не пригодится), но лучше пусть это будет, тогда трудности не окажутся такими трудными).
                                Каждому, у кого размер ноги меньше 46, мы выдадим теплые рыбацкие сапоги из “пенки”.
                                </p>
                            </div>
                            <div class="item">
                                <div class="icon"><img src="./assets/img/icon3.svg" alt=""></div>
                                <div class="content">
                                    <span>Проживание</span>
                                    <p>Жить мы будем в обычной, самой настоящей русской избе, на вершине горы, с русской печкой и кашей в чугунке. Это не коттежд, не гостевой дом, это обыкновенная...<a id="pop_3" href="#text-popup_3">Подробнее<svg id="SVGDoc" width="14" height="8" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:avocode="https://avocode.com/" viewBox="0 0 14 8">
                                                <defs></defs>
                                                <desc>Generated with Avocode.</desc>
                                                <g>
                                                    <g>
                                                        <title>Слой 519</title>
                                                        <image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAICAYAAADJEc7MAAABCUlEQVQoU5XQvUrDABSG4fckohg1iiBC1UFBXBy9ChfBoaC0SCfBqc7SoOAtCKKC4Fisi9Cll+ANCIJLU7VQwRpsm/TnSKS2EbJ45u85f4KqIKL8s2SQz6s5M1JZ74LrbS++x/VJ3L9YDV/XpNd6HsDJ/OucYXQegQcNzJS3m6hF8fzN20TTCs4ESYqSGk4sPo3ZjfEc6BEqpe5okP7aWqmGOIL2ELk2wRnCMKEq9p3roByLSqlnsuN1Fj6mzcqlqmZEuKrXqgfsb7T/wv5u9m3ZAU6AIhDemwY9/7T8LJurfhiLhT+TC26uj1G48HpkSS41f++Oh/21pwrlQwNjtu61T8kst6LP+ga152Rfueki+wAAAABJRU5ErkJggg==" width="14" height="8" transform="matrix(1,0,0,1,0,0)"></image>
                                                    </g>
                                                </g>
                                            </svg></a></p>
                                </div>
                            </div>
                            <div id="text-popup_3" class="white-popup mfp-hide">
                                <h2>Проживание</h2>
                                <p>Жить мы будем в обычной, самой настоящей русской избе, на вершине горы, с русской печкой и кашей в чугунке. Это не коттежд, не гостевой дом, это обыкновенная изба, и это необходимо ясно себе представлять. В избе жарко после протопки печи и может быть зябко в сильный мороз у утру.
                                Из необычного в нашей избе есть теплый туалет городского типа, с канализацией и смывом, прекрасным видом на долину реки Оять, туалет в доме, бежать по холоду не нужно) Так же есть водопровод, вода только холодная, поступает прямо из питьевого общедеревенского колодца. Но! Если будут сильные морозы (ниже 25 градусов), коммуникации могут не выдержать и воды может какое-то время не быть. Так же у нас изредка проходят сильные метели, налипание снега, ледяные дожди и ураганы, из-за этого могут отключить свет. Отключение света – обычное дело в деревне, и если это произойдет, нет никакого другого варианта, кроме как с пониманием, благодушеем и терпением к этому подойти. Это нужно очень ясно себе представлять. 
                                Вместо душа у нас каждый день топится баня по-черному, там можно и мыться и париться.
                                </p>
                            </div>
                            <div class="item">
                                <div class="icon"><img src="./assets/img/icon4.svg" alt=""></div>
                                <div class="content">
                                    <span>Питание</span>
                                    <p>Наш рацион – традиционная деревенская еда. Так же на столе будут традиционные типично вепсские блюда (сканцы, калитки, каша и прочее, приготовленное в печи), почти...<a id="pop_4" href="#text-popup_4">Подробнее<svg id="SVGDoc" width="14" height="8" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:avocode="https://avocode.com/" viewBox="0 0 14 8">
                                                <defs></defs>
                                                <desc>Generated with Avocode.</desc>
                                                <g>
                                                    <g>
                                                        <title>Слой 519</title>
                                                        <image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAICAYAAADJEc7MAAABCUlEQVQoU5XQvUrDABSG4fckohg1iiBC1UFBXBy9ChfBoaC0SCfBqc7SoOAtCKKC4Fisi9Cll+ANCIJLU7VQwRpsm/TnSKS2EbJ45u85f4KqIKL8s2SQz6s5M1JZ74LrbS++x/VJ3L9YDV/XpNd6HsDJ/OucYXQegQcNzJS3m6hF8fzN20TTCs4ESYqSGk4sPo3ZjfEc6BEqpe5okP7aWqmGOIL2ELk2wRnCMKEq9p3roByLSqlnsuN1Fj6mzcqlqmZEuKrXqgfsb7T/wv5u9m3ZAU6AIhDemwY9/7T8LJurfhiLhT+TC26uj1G48HpkSS41f++Oh/21pwrlQwNjtu61T8kst6LP+ga152Rfueki+wAAAABJRU5ErkJggg==" width="14" height="8" transform="matrix(1,0,0,1,0,0)"></image>
                                                    </g>
                                                </g>
                                            </svg></a></p>
                                </div>
                            </div>
                            <div id="text-popup_4" class="white-popup mfp-hide">
                                <h2>Питание</h2>
                                <p>Наш рацион – традиционная деревенская еда. Так же на столе будут традиционные типично вепсские блюда (сканцы, калитки, каша и прочее, приготовленное в печи), почти всегда в подполье у нас есть деревенские закрутки в банках)) И еще, там же почти всегда есть литр, другой коварного вепсского пива (олудя))
                                Никаких кафе, столовых в радиусе 80 км нет, поэтому еду нам готовят деревенские хозяйки, бабушки и мастерицы. Мы с ними уже научилоись локально избавляться от мяса в блюдах, если это необходимо гостям. Но если у вас есть особые предпочтения в еде, диеты и прочие ограничения, то нужно нам вместе продумать: как мы будем это учитывать?
                                Мы будем много путешествовать, иногда время между приемами пищи будет большим (5-6 часов), с собой в этом случае мы берем деревенский “тормозок” – вареные яйца, бутерброды, конфетки, чай. Это нужно учесть.
                                </p>
                            </div>
                            <div class="item">
                                <div class="icon"><img src="./assets/img/icon5.svg" alt=""></div>
                                <div class="content">
                                    <span>Дополнительно</span>
                                    <p>Мы едем в совсем глухие места, тем они и замечательны. Жизнь там будто замерла 100-200 лет назад, там она настоящая! Эти деревни находятся вдали от больших...<a id="pop_5" href="#text-popup_5">Подробнее<svg id="SVGDoc" width="14" height="8" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:avocode="https://avocode.com/" viewBox="0 0 14 8">
                                                <defs></defs>
                                                <desc>Generated with Avocode.</desc>
                                                <g>
                                                    <g>
                                                        <title>Слой 519</title>
                                                        <image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAICAYAAADJEc7MAAABCUlEQVQoU5XQvUrDABSG4fckohg1iiBC1UFBXBy9ChfBoaC0SCfBqc7SoOAtCKKC4Fisi9Cll+ANCIJLU7VQwRpsm/TnSKS2EbJ45u85f4KqIKL8s2SQz6s5M1JZ74LrbS++x/VJ3L9YDV/XpNd6HsDJ/OucYXQegQcNzJS3m6hF8fzN20TTCs4ESYqSGk4sPo3ZjfEc6BEqpe5okP7aWqmGOIL2ELk2wRnCMKEq9p3roByLSqlnsuN1Fj6mzcqlqmZEuKrXqgfsb7T/wv5u9m3ZAU6AIhDemwY9/7T8LJurfhiLhT+TC26uj1G48HpkSS41f++Oh/21pwrlQwNjtu61T8kst6LP+ga152Rfueki+wAAAABJRU5ErkJggg==" width="14" height="8" transform="matrix(1,0,0,1,0,0)"></image>
                                                    </g>
                                                </g>
                                            </svg></a></p>
                                </div>
                            </div>
                            <div id="text-popup_5" class="white-popup mfp-hide">
                                <h2>Дополнительно</h2>
                                <p>Мы едем в совсем глухие места, тем они и замечательны. Жизнь там будто замерла 100-200 лет назад, там она настоящая! Эти деревни находятся вдали от больших атомобильных трасс, железных дорог и хоть сколько больших городов. Нет тут никаких туристических троп, как и самих туристов. Нет тут никакой туристической инфраструктуры, нет кафе, нет парикмахерских, зато есть библиотека, сельские дома культуры и самые открытые, добрые и душевные деревенские жители. 
                                А еще есть непредсказуемость…, почти каждое путешествие меняется по ходу действия: кто-то из деревенских ушел на охоту и нам куда-то уже не попасть, дерево упало и перегородило проезд, ледяной дождь ограничил передвижение, морозы сковали электрические провода, кто-то заболел и не может с нами встретиться, сломалась поромная переправа, дорогу в деревню замело, а тракторист запил, река разлилась и унесла по течению сельский клуб, охотники поранили медведя и в лес уже нельзя, оттепель закрыла ледовую переправу… Может случится все что угодно и тогда мы будем строить свой путь и досуг по обстоятельствам, а не по программе, это очень важно понимать и с этим соглашаться до выезда в глушь. Вообще, это очень здорово, это часть нашего путешествия, это все настоящее и при правильном настрое – все это в жилу, все в удовольствие. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sect15">
                <div class="container">
                    <div class="top">
                        <div class="left">
                            <div class="swiper-container-three">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img src="./assets/img/h1.png" alt=""></div>
                                    <div class="swiper-slide"><img src="./assets/img/h2.png" alt=""></div>
                                    <div class="swiper-slide"><img src="./assets/img/h3.png" alt=""></div>
                                    <div class="swiper-slide"><img src="./assets/img/h4.png" alt=""></div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="button-next"></div>
                                <div class="button-prev"></div>
                            </div>
                            <div class="photos">
                                <img src="./assets/img/h2.png" alt="">
                                <img src="./assets/img/h3.png" alt="">
                                <img src="./assets/img/h4.png" alt="">
                            </div>
                        </div>
                        <div class="right">
                            <div class="title">Поживите в настоящей русской избе</div>
                            <span>Где-то между Ладогой и Онегой вас ждёт житьё-бытьё
                                в настоящей вепсской избе. Ей уже 80 лет, и она живая,
                                самая настоящая, старинная, а посему и колоритная.
                                А ещё теплая и очень уютная!</span>
                            <p>Именно в таком месте почувствуете дух старинного деревянного
                                дома: сами затопите печь и поищите домового, что живёт за ней,
                                погреете косточки на лежанке, сходите на колодец, просто
                                посидите на скамеечке под звуки винила из под иглы патефона
                                "Юность 301", посмотрите на реку, на вершины холмов, послушаете
                                трескучую тишь далёкой деревни, закусите вечернюю дымку
                                теплым пирогом (но об этом дальше) и, конечно, помоетесь в бане
                                по-чёрному - тотальное погружение в атмосферу удаленной от
                                туристических троп и городов деревеньки, ведь в иных местах и
                                телефон не ловит. Вокруг только звуки природы, да треск
                                дров из русской печи.</p>
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="left">
                            <div class="swiper-container-three">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img src="./assets/img/h5.png" alt=""></div>
                                    <div class="swiper-slide"><img src="./assets/img/h6.png" alt=""></div>
                                    <div class="swiper-slide"><img src="./assets/img/h7.png" alt=""></div>
                                    <div class="swiper-slide"><img src="./assets/img/h8.png" alt=""></div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="button-next"></div>
                                <div class="button-prev"></div>
                            </div>
                            <div class="photos">
                                <img src="./assets/img/h6.png" alt="">
                                <img src="./assets/img/h7.png" alt="">
                                <img src="./assets/img/h8.png" alt="">
                            </div>
                        </div>
                        <div class="right">
                            <div class="title">Порадуй свои вкусовые рецепторы!</div>
                            <span>Естественно, вернуться домой вы сможете с целой коробкой
                                самых разных угощений, а в качестве вишенки на
                                торте - устроить перекус прямо на местном маяке.
                                Нугде вы еще найдете такой видовой "ресторан"?!</span>
                            <p>Посему приготовьтесь окунуться в самобытную вепсскую
                                кухню, калитки, пареные и вареные корнеплоды, местный
                                творог, сливки, ягоды, рыба, мед, грибы, струя бобра и много
                                всего другого, что городским жителям даже и не снилось.
                                Местные хозяюшки вас уж точно не отпустят голодным!</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sect14">
                <div class="container">
                    <div class="top">
                        <div class="left">
                            <div class="title">Знакомство с удивительными <br>местными жителями</div>
                            <p>В деревнях, да ещё и в далеких, глухих, живут совершенно необыкновенные люди. Открытые, добрые, живые, гостеприимные и почти сразу – родные. «Как к бабушке в деревню съездил» - не редко говорят наши гости :)  
                            Наше путешествие – это каждодневные встречи с деревенскими, мы будим ходить к ним на бесËды, будем угощаться калитками из печи, слушать рассказы, учиться делать простые деревенские поделки, ковать металл в кузнице и деревенского кузнеца. Все эти люди – не аниматоры, не работники туристического сервиса (кроме нас-то туристов там не будет:), они просто тут живут, они настоящие и очень душевные, они не носят «масок» и не держат фигу за спиной. Тут все честно и от сердца. 
                            Кто-то делает лучшие пироги в печи, кто-то в заброшенном коровнике куёт металл и знается с чертом, кто-то в глуши собирает удивительный музей вепсского быта, кто-то сохраняет язык песни и придания, кто-то делает старинные куколки… 
                            Все они знают, как правильно косить траву и делать посуду из бересты, как готовить целебный напиток из репы и доить корову, а ещё - как найти выход из леса, если заблудился, и даже как заговаривать огонь, чтобы пожар не спалил соседние избы. Вообще, эта земля живет такими людьми, у них будто нет опции "загрустить и сдаться".
                            Сомнений нет - опыт такого душеного и открытого общения с такими необыкновенными людьми останется с вами очень надолго. Быть может, это будет самое важное в путешествии.
                            </p>
                        </div>
                        <div class="right">
                            <img src="./assets/img/z3.png" alt="">
                        </div>
                    </div>
                    <div class="bottom">
                        <img src="./assets/img/z2.png" alt="">
                        <img src="./assets/img/z1.png" alt="">
                    </div>
                </div>
            </section>
            <section class="sect13">
                <div class="container">
                    <h1>Узнайте о <span>ближайших</span> путешествиях<br>и получите <span>скидку 10%</span></h1>
                    <div class="form">
                        <form action="./mail_1.php" method="post">
                            <input type="text" placeholder="Ваш номер" name="tell">
                            <button class="preview-block__btn custom-btn">Узнать</button>
                            <div class="check-form">
                                <p>Нажимая на кнопку, вы даете <a href="http://santino-test.ru/personal.php">согласие на обработку своих персональных данных</a></p>
                            </div>
                        </form>
                    </div>
                    <div class="items">
                        <div class="item">
                            <div class="icon">10%</div>
                            <div class="content">
                                <div class="title">4 Ночи</div>
                                <p>Цена со скидкой<br>18 000 р</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="icon">10%</div>
                            <div class="content">
                                <div class="title">5 Ночей</div>
                                <p>Цена со скидкой<br>22 500 р</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sect12">
                <div class="container">
                    <div class="items">
                        <div class="left">
                            <div class="content">
                                <div class="title">Прогуляйтесь по такому далекому, но все же близкому Вепсскому краю</div>
                                <span>Про природу, про архитектуру этих мест не получится рассказать в двух словах,так как за 5 дней вы посетите огромное количество мест со своей историей, со своей легендой.</span>
                                <p>Это и прекрасные холмы, долины рек, туманы, очаровательные, атмосферные лесные деревеньки, старинные, деревянные церкви Русского Севера, одна из которых - ровесница Колумба, и языческое капище, и самодельный музей, и заброшенный онежский маяк, и деревня Шондовичи, в которой снимали фильм "Жили-были", со своей безструктурной структурой, и подвесные мосты, многое, многое другое, из-за чего к нам со всей России в гости едут первоклассные пейзажные фотографы.</p>
                            </div>
                            <div class="bottom">
                                <img src="./assets/img/s111.png" alt="">
                                <img src="./assets/img/s111.png" alt="">
                                <img src="./assets/img/s111.png" alt="">
                                <img src="./assets/img/s111.png" alt="">
                                <img src="./assets/img/s112.png" alt="">
                                <img src="./assets/img/s113.png" alt="">
                            </div>
                        </div>
                        <div class="right">
                            <div class="swiper-container-two">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img src="./assets/img/sl4.jpg" alt=""></div>
                                    <div class="swiper-slide"><img src="./assets/img/les.i.veter_192423802_308256730791963_596993274879205944_n.jpg" alt=""></div>
                                    <div class="swiper-slide"><img src="./assets/img/sl3.jpg" alt=""></div>
                                    <div class="swiper-slide"><img src="./assets/img/les.i.veter_195152021_928059684649825_6134960600434967165_n.jpg" alt=""></div>
                                    <div class="swiper-slide"><img src="./assets/img/1234.jpg" alt=""></div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="button-next"></div>
                                <div class="button-prev"></div>
                            </div>
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
                                        <h4>Наталья Краснова</h4>
                                        <h3>instagram <a href="">@natalia_krasnova_</a></h3>
                                        <p>
                                            Эмоций столько, что не могу пока их собрать в кучку! Хочу сказать огромное спасибо Насте, Илье и Серёже @les.i. veter за волшебные 4 дня!!! И спасибо нашей крутой компании! Вы супер</p>
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
                                        <h3>instagram <a href="">@natalia_krasnova_</a></h3>
                                        <p>
                                            Эмоций столько, что не могу пока их собрать в кучку! Хочу сказать огромное спасибо Насте, Илье и Серёже @les.i. veter за волшебные 4 дня!!! И спасибо нашей крутой компании! Вы супер</p>
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
                                        <h4>Наталья Краснова</h4>
                                        <h3>instagram <a href="">@natalia_krasnova_</a></h3>
                                        <p>
                                            Эмоций столько, что не могу пока их собрать в кучку! Хочу сказать огромное спасибо Насте, Илье и Серёже @les.i. veter за волшебные 4 дня!!! И спасибо нашей крутой компании! Вы супер</p>
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
                        <div class="pagin">
                            <div class="btn-prev"></div>
                            <div class="btn-next"></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sect8">
                <div class="container">
                    <div class="items">
                        <div class="item">
                            <img src="./assets/img/p4.png" alt="">
                            <h3>Илья федоров</h3>
                        </div>
                        <div class="item">
                            <img src="./assets/img/p5.png" alt="">
                            <h3>Настя Иванова</h3>
                        </div>
                        <div class="item">
                            <span>Наши гиды</span>
                            <p>Илья и Настя сделают все, чтобы вам было интересно и комфортно,
                                а также познакомят с прекрасными людьми и незабываемыми
                                местами, и, естественно, покажут их без прекрас и лоска, так
                                сказать "по-настоящему", ведь мы хотим, чтобы вы нам
                                поверили и влюбились в них так же, как и мы.
                                Приготовьтесь к изменениям после путешествия!</p>
                            <button class="preview-block__btn custom-btn">Подробнее</button>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sect7">
                <div class="container">
                    <div class="item">
                        <h1>Поехали с нами</h1>
                        <div class="text">
                            <p>Заполните простую форму для получения обратной связи. <br>
                                Мы свяжемся с Вами в ближайшее время и будем готовы ответить на все Ваши <br>
                                вопросы. Уточнение цен, дат, деталей Вашего путешествия.</p>
                            <p>Мы очень бережно относимся к каждому нашему клиенту, поэтому хотим <br>
                                предоставить своевременные данные и все мельчашие подробности <br>
                                поезкди. Всегда открыты к общению!</p>
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
    <script type="text/javascript" src="./assets/js/Magnific-Popup-master/dist/jquery.magnific-popup.js"></script>
    <script type="text/javascript" src="./assets/js/smartmenus/jquery.smartmenus.min.js"></script>
    <script>
        var swiperTwo = new Swiper('.swiper-container-two', {
            navigation: {
                nextEl: '.button-next',
                prevEl: '.button-prev',
            },
        });

    </script>
    <script>
        var swiperThree = new Swiper('.swiper-container-three', {
            navigation: {
                nextEl: '.button-next',
                prevEl: '.button-prev',
            },
        });

    </script>
    <script>
        var swiper = new Swiper('.reviews-container', {
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 1,
            loop: true,
            loopFillGroupWithBlank: true,
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
            },
            navigation: {
                nextEl: '.btn-next',
                prevEl: '.btn-prev',
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
        jQuery(document).ready(function($) {
            $('#pop_1').magnificPopup({
                type: 'inline'
            });
            $('#pop_2').magnificPopup({
                type: 'inline'
            });
            $('#pop_3').magnificPopup({
                type: 'inline'
            });
            $('#pop_4').magnificPopup({
                type: 'inline'
            });
            $('#pop_5').magnificPopup({
                type: 'inline'
            });
        });
        function viewDiv1(){
          document.getElementById("type1").style.display = "block";
          document.getElementById("type2").style.display = "none";
          document.getElementById("type3").style.display = "none";
          document.getElementById("type4").style.display = "none";
          document.getElementById("type5").style.display = "none";
        };
        function viewDiv2(){
          document.getElementById("type1").style.display = "none";
          document.getElementById("type2").style.display = "block";
          document.getElementById("type3").style.display = "none";
          document.getElementById("type4").style.display = "none";
          document.getElementById("type5").style.display = "none";
        };
        function viewDiv3(){
          document.getElementById("type1").style.display = "none";
          document.getElementById("type2").style.display = "none";
          document.getElementById("type3").style.display = "block";
          document.getElementById("type4").style.display = "none";
          document.getElementById("type5").style.display = "none";
        };
        function viewDiv4(){
          document.getElementById("type1").style.display = "none";
          document.getElementById("type2").style.display = "none";
          document.getElementById("type3").style.display = "none";
          document.getElementById("type4").style.display = "block";
          document.getElementById("type5").style.display = "none";
        };
        function viewDiv5(){
          document.getElementById("type1").style.display = "none";
          document.getElementById("type2").style.display = "none";
          document.getElementById("type3").style.display = "none";
          document.getElementById("type4").style.display = "none";
          document.getElementById("type5").style.display = "block";
        };
        $(function() {
            $(".one-btn").click(function() {
                $(".two-btn").removeClass("active");
                $(".three-btn").removeClass("active");
                $(".four-btn").removeClass("active");
                $(".five-btn").removeClass("active");
                $(this).toggleClass("active");
            })
            $(".two-btn").click(function() {
                $(".one-btn").removeClass("active");
                $(".three-btn").removeClass("active");
                $(".four-btn").removeClass("active");
                $(".five-btn").removeClass("active");
                $(this).toggleClass("active");
            })
            $(".three-btn").click(function() {
                $(".one-btn").removeClass("active");
                $(".two-btn").removeClass("active");
                $(".four-btn").removeClass("active");
                $(".five-btn").removeClass("active");
                $(this).toggleClass("active");
            })
            $(".four-btn").click(function() {
                $(".one-btn").removeClass("active");
                $(".three-btn").removeClass("active");
                $(".two-btn").removeClass("active");
                $(".five-btn").removeClass("active");
                $(this).toggleClass("active");
            })
            $(".five-btn").click(function() {
                $(".one-btn").removeClass("active");
                $(".three-btn").removeClass("active");
                $(".four-btn").removeClass("active");
                $(".two-btn").removeClass("active");
                $(this).toggleClass("active");
            })
        });
    </script>
</body>
</html>
