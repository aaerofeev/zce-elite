<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name='yandex-verification' content='6040378f79bb16f9'>
    <meta name="google-site-verification" content="JW_CqsFhlmrHs-Em-8QXndUzuEzUgw70ph1itnCBIb4">
    <meta name="description"
          content="Highly skilled internet solutions developers. Высокопрофессиональные разработчики интернет решений"/>
    <meta name="keyword"
          content="php, mysql, html, css, javascript, zce, developer, project, solution, digital, media, zend, certificate, engineer"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Web developers, ZCE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" href="style.css" rel="stylesheet" media="screen"/>
</head>
<?php
$mainColor = 'blue-grey';

function autoLang() {

    if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
        if (strpos($_SERVER['HTTP_ACCEPT_LANGUAGE'], 'ru') || strpos($_SERVER['HTTP_ACCEPT_LANGUAGE'], 'kz'))
            return 'ru';
    }

    return 'en';
}

$dictionary = [
    'Developers' => 'Разработчики',
    'ZEND Certified Engineers' => 'ZEND Сертифицированные инженеры',
    'About us' => 'О нас',
    'Skills' => 'Навыки',
    'Our works' => 'Участие в проектах',
    'Contact' => 'Написать',
    'Profile :name' => 'Профиль :name',
    'Alexandr Erofeev' => 'Александр Ерофеев',
    'Bereznev Vitaly' => 'Березнев Виталий',
    'Seven years in IT industry' => '7 лет в разработке',
    'Native apps for iOS & Android' => 'Приложения для iOS и Android',
    'Web applications' => 'Веб-приложения',
    'We haven\'t problems with any side' => 'У нас нет проблем с любой стороны',
    'Difficulty doesn\'t matter' => 'Сложность не имеет значения',
    'Kazakhstan Internet Olympiad' => 'Казахстанские Интернет Олимпиады',
    'Pavlodar online' => 'Областное СМИ',
    'Shop of dental equipment' => 'Магазин стоматологического оборудования',
    'Educational Internet Edition' => 'Образовательное интернет издание',
    'Telegram and Viber taxibot' => 'Telegram и Viber бот вызова такси',
];

$lang = isset($_GET['lang']) && in_array($_GET['lang'], ['ru', 'en']) ? $_GET['lang'] : autoLang();

function __($text, $argv = NULL)
{
    global $dictionary, $lang;
    if (isset($dictionary[$text]) && $lang == 'ru') {
        $text = $dictionary[$text];
    }

    return empty($argv) ? $text : str_replace(array_keys($argv), array_values($argv), $text);
}

function workRender($item, $className = NULL, $rowClassName = NULL, $hideRule = NULL)
{
    $className = $className ?: 'medium';
    $rowClassName = $rowClassName ?: 's12 m6 l3';
    $hideRule = $hideRule ?: 'hide-on-med-and-down';
    list($url, $img, $name, $desc) = $item;

    return '<div class="col ' . $rowClassName . '">
                <div class="card card-work ' . $className . '">
                    <div class="card-image ' . $hideRule . '">
                        <a target="_blank" href="' . $url . '">
                            <img src="' . $img . '">
                        </a>                  
                    </div>
                    <div class="card-content">
                        <span class="card-title truncate">' . $name . '</span>
                        <p>' . __($desc) . '</p>
                    </div>
                  </div>
                </div>';
}

function lang() {
    global $lang;
    return strtoupper($lang);
}

?>
<body>
<nav class="nav-extended <?= $mainColor ?>">
    <div class="container">
        <div class="nav-wrapper">
            <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>
            <a href="/" class="brand-logo"><?= __('Developers') ?></a>

            <ul class="side-nav" id="mobile-menu">
                <li><a href="#about"><?= __('About us') ?></a></li>
                <li><a href="#skills"><?= __('Skills') ?></a></li>
                <li><a href="#works"><?= __('Our works') ?></a></li>
                <li class="divider"></li>
                <li><a href="?lang=ru">Russian</a></li>
                <li><a href="?lang=en">English</a></li>
            </ul>

            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="#about"><?= __('About us') ?></a></li>
                <li><a href="#skills"><?= __('Skills') ?></a></li>
                <li><a href="#works"><?= __('Our works') ?></a></li>
                <li>
                    <a class="dropdown-button" href="#!" data-activates="langdropdown">
                        <?= lang() ?><i class="material-icons right">arrow_drop_down</i>
                    </a>
                </li>
            </ul>

            <ul id="langdropdown" class="dropdown-content">
                <li><a href="?lang=ru">RU</a></li>
                <li><a href="?lang=en">EN</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="card horizontal <?= $mainColor ?> lighten-1">
        <div class="card-image hide-on-med-and-down">
            <img src="/img/zend.png">
        </div>
        <div class="card-stacked">
            <div class="card-content white-text skill-holder valign-wrapper">
                <div class="tuba-duba">
                    <span class="card-title"><?= __('ZEND Certified Engineers') ?></span>

                    <div class="skills">
                        <a class="chip blue-grey lighten-4" target="_blank" href="http://php.net/">php</a>
                        <a class="chip blue-grey lighten-4" target="_blank" href="http://dev.mysql.com/">mysql</a>
                        <a class="chip blue-grey lighten-4" target="_blank"
                           href="http://en.wikipedia.org/wiki/JavaScript">js</a>
                        <a class="chip blue-grey lighten-4" target="_blank"
                           href="https://en.wikipedia.org/wiki/React_(JavaScript_library)">react</a>
                        <a class="chip blue-grey lighten-4" target="_blank"
                           href="https://en.wikipedia.org/wiki/Objective-C">ios</a>
                        <a class="chip blue-grey lighten-4" target="_blank" href="https://en.wikipedia.org/wiki/Java">android</a>
                        <a class="chip blue-grey lighten-4" target="_blank" href="https://facebook.github.io/react-native/">react native</a>
                        <a class="chip blue-grey lighten-4" target="_blank" href="https://unity3d.com/">unity</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="workers">
            <div class="col offset-l1 l5 offset-s0 s6 xl4 offset-xl2">
                <div class="card">
                    <div class="card-image">
                        <img class="activator" src="/expert/Alexandr2.jpg" alt="<?= __('Alexandr Erofeev') ?>">
                    </div>
                    <div class="card-content">
                        <span class="card-title grey-text text-darken-4"><?= __('Alexandr Erofeev') ?></span>

                        <div class="social">
                            <a target="_blank"
                               href="http://www.zend.com/en/yellow-pages/ZEND021511"><img
                                        src="img/zend.jpg" alt="Zend Profile" title="Zend Profile"/></a>
                            <!--<a target="_blank" href="https://www.odesk.com/users/~0119986cfc51fb9099"><img
                                        src="img/odesk.jpg" alt="Odesk Profile" title="Odesk Profile"/></a>-->
                            <!--<a target="_blank" href="http://freelansim.ru/freelancers/alexandrerofeev"><img
                                        src="img/freelansim.png" alt="Freelnsim Profile" title="Freelnsim Profile"/></a>-->
                            <a target="_blank" href="https://www.facebook.com/alexanr.erofeev"><img src="/img/facebook.jpg"
                                                                                           alt="Facebook Profile"
                                                                                           title="Facebook Profile"/></a>
                            <a target="_blank" href="https://vk.com/id13126743"><img src="/img/vkontakte.jpg"
                                                                                     alt="Vkontakte Profile"
                                                                                     title="Vkontakte Profile"/></a>
                        </div>
                    </div>
                    <div class="card-action">
                        <a target="_blank" href="mailto:erofeeij@gmail.com"><?= __('Contact') ?></a>
                        <a target="_blank" href="https://www.linkedin.com/in/%D0%B0%D0%BB%D0%B5%D0%BA%D1%81%D0%B0%D0%BD%D0%B4%D1%80-%D0%B5%D1%80%D0%BE%D1%84%D0%B5%D0%B5%D0%B2-b8240849/"
                           target="_blank">
                            LinkedIn
                        </a>
                    </div>
                </div>
            </div>
            <div class="col l5 s6 xl4">
                <div class="card">
                    <div class="card-image">
                        <img class="activator" src="/expert/Vitaly2.jpg" alt="<?= __('Bereznev Vitaly') ?>">
                    </div>
                    <div class="card-content">
                        <span class="card-title grey-text text-darken-4"><?= __('Bereznev Vitaly') ?></span>

                        <div class="social">
                            <a target="_blank"
                               href="http://www.zend.com/en/yellow-pages/ZEND021264"><img
                                        src="img/zend.jpg" alt="Zend Profile" title="Zend Profile"/></a>
                            <!--<a target="_blank" href="https://www.odesk.com/users/~01fcc48db1c4080c28"><img
                                        src="img/odesk.jpg" alt="Odesk Profile" title="Odesk Profile"/></a>-->
                            <!--<a target="_blank" href="http://freelansim.ru/freelancers/activist"><img
                                        src="img/freelansim.png" alt="Freelnsim Profile" title="Freelnsim Profile"/></a>-->
                            <a target="_blank" href="https://www.facebook.com/actopolus"><img src="/img/facebook.jpg"
                                                                                              alt="Facebook Profile"
                                                                                              title="Facebook Profile"/></a>
                            <a target="_blank" href="http://vk.com/actopolus"><img src="/img/vkontakte.jpg"
                                                                                   alt="Vkontakte Profile"
                                                                                   title="Vkontakte Profile"/></a>
                        </div>
                    </div>
                    <div class="card-action">
                        <a target="_blank" href="mailto:actopolus@gmail.com"><?= __('Contact') ?></a>
                        <a target="_blank" href="https://www.linkedin.com/in/actopolus/">
                            LinkedIn
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h4 class="header scrollspy" id="about"><?= __('About us') ?></h4>

    <ul class="collapsible z-depth-1" data-collapsible="accordion">
        <li>
            <div class="collapsible-header"><i class="material-icons">access_time</i><?= __('Seven years in IT industry') ?></div>
            <!--<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>-->
        </li>
        <li>
            <div class="collapsible-header"><i class="material-icons">apps</i><?= __('Native apps for iOS & Android') ?></div>
        </li>
        <li>
            <div class="collapsible-header"><i class="material-icons">web_asset</i><?= __('Web applications') ?></div>
        </li>
        <li>
            <div class="collapsible-header"><i class="material-icons">code</i><?= __('We haven\'t problems with any side') ?></div>
        </li>
        <li>
            <div class="collapsible-header"><i class="material-icons">done</i><?= __('Difficulty doesn\'t matter') ?></div>
        </li>
    </ul>

    <h4 class="header scrollspy" id="skills"><?= __('Skills') ?></h4>

    <ul class="collection with-header z-depth-1">
        <li class="collection-item">
            <span class="chip lime lighten-1">Stack</span>
            <a class="chip" target="_blank" href="http://php.net/">php</a>
            <a class="chip" target="_blank" href="http://dev.mysql.com/">mysql</a>
            <a class="chip" target="_blank" href="http://en.wikipedia.org/wiki/HTML">html</a>
            <a class="chip" target="_blank" href="http://en.wikipedia.org/wiki/CSS">css</a>
            <a class="chip" target="_blank" href="http://en.wikipedia.org/wiki/JavaScript">javascript</a>
        </li>

        <li class="collection-item">
            <span class="chip lime lighten-1">Frameworks</span>
            <a class="chip" target="_blank" href="http://laravel.com">laravel</a>
            <a class="chip" target="_blank" href="http://kohanaframework.org/">kohana</a>
            <a class="chip" target="_blank" href="http://framework.zend.com/">zend</a>
            <a class="chip teal lighten-3" target="_blank" href="http://framework.zend.com/">backbone</a>
            <a class="chip teal lighten-3" target="_blank" href="http://framework.zend.com/">react</a>
            <a class="chip teal lighten-3" target="_blank" href="http://framework.zend.com/">react native</a>
            <a class="chip teal lighten-3" target="_blank" href="http://framework.zend.com/">angular 2</a>
        </li>

        <li class="collection-item">
            <span class="chip lime lighten-1">VCS</span>
            <a class="chip" target="_blank" href="http://en.wikipedia.org/wiki/Git">git</a>
            <a class="chip" target="_blank" href="http://en.wikipedia.org/wiki/Subversion">svn</a>
        </li>

        <li class="collection-item">
            <span class="chip lime lighten-1">Trends</span>
            <a class="chip" target="_blank" href="https://core.telegram.org/">telegram bot api</a>
            <a class="chip" target="_blank" href="https://developers.viber.com/">viber bot api</a>
        </li>

        <li class="collection-item">
            <span class="chip lime lighten-1">API</span>
            <a class="chip" target="_blank" href="https://developers.facebook.com/docs">facebook</a>
            <a class="chip" target="_blank" href="http://instagram.com/developer/">instagram</a>
            <a class="chip" target="_blank" href="https://dev.twitter.com/">twitter</a>
            <a class="chip" target="_blank" href="http://vk.com/dev/openapi">vk</a>
            <a class="chip" target="_blank" href="http://api.mail.ru/docs/guides/social-apps/">mail.ru</a>
            <a class="chip" target="_blank" href="https://developers.google.com/maps/documentation/">google maps</a>
        </li>
    </ul>

    <h4 class="header scrollspy" id="works" class="header"><?= __('Our works') ?></h4>

    <?php
    $works = [
        ['http://pavon.kz', '/img/portfolio/pavon.jpg', 'pavon.kz', 'Pavlodar online'],
        ['http://cdo.kz', '/img/portfolio/cdo.jpg', 'cdo.kz', 'Kazakhstan Internet Olympiad'],
        ['http://tinel.kz', '/img/portfolio/bonjour.png', 'tinel.kz', 'Салон красоты Bonjour'],
        ['http://steklo.senira.by/', '/img/portfolio/senira.png', 'steklo.senira.by', 'Кухонные фартуки из закаленного стекла'],
    ];

    ?>

    <div class="row">
        <div class="cards">
            <?php foreach ($works as $item) echo workRender($item); ?>
        </div>

        <?= workRender(['http://vestnik.cdo.kz', '/img/portfolio/vestnik.png', 'vestnik.cdo.kz', 'Educational Internet Edition'], 'sameObk small') ?>
        <?= workRender(['http://dentalmarket.kz', '/img/portfolio/dental.png', 'dentalmarket.kz', 'Shop of dental equipment'], 'small', 'hide-on-large-only s12 m6 l3') ?>
        <div class="col s12 m12 l9">
            <div class="card sameObk">
                <div class="card-image">
                    <a target="_blank" href="https://play.google.com/store/apps/details?id=com.evilteam.sozder">
                        <img src="/img/portfolio/duris.png" title="Дұрыс сөз"
                             alt="Дұрыс сөз"/>
                    </a>
                </div>
                <div class="card-content">
                    <p class="center-align">Приложение "Дұрыс сөз". Google play</p>
                </div>
            </div>
        </div>

        <div class="col s12 m6">
            <div class="card sameCard">
                <div class="card-image">
                    <a target="_blank" href="https://play.google.com/store/apps/details?id=com.Evilteam.Postman">
                        <img src="/img/portfolio/postman.png" title="Postman Clicker" alt="Postman Clicker"/>
                    </a>
                </div>
                <div class="card-content">
                    <p class="center-align">Игра "Postman Clicker". Google play</p>
                </div>
            </div>
        </div>

        <div class="col s12 m6">
            <div class="card sameCard">
                <div class="card-image">
                    <a target="_blank" href="https://itunes.apple.com/us/app/bible-pro/id1022820743?l=ru&ls=1&mt=8">
                        <img src="/img/portfolio/bible.png" title="BiblePro" alt="BiblePro"/>
                    </a>
                </div>
                <div class="card-content">
                    <p class="center-align">Приложение "BiblePro". AppStore</p>
                </div>
            </div>
        </div>

        <div class="col s12 m12 l6">
            <div class="card sameCarousel">
                <div class="card-image">
                    <div class="bobek-work carousel carousel-slider center" data-indicators="true">
                        <div class="carousel-item" href="#one!"><img src="/bobek/1.png" alt="Image 1"/></div>
                        <div class="carousel-item" href="#two!"><img src="/bobek/2.png" alt="Image 2"/></div>
                        <div class="carousel-item" href="#three!"><img src="/bobek/3.png" alt="Image 3"/></div>
                        <div class="carousel-item" href="#four!"><img src="/bobek/4.png" alt="Image 4"/></div>
                    </div>
                </div>
                <div class="card-content">
                    <p class="center-align">Серия учебников для детей</p>
                </div>
            </div>
        </div>

        <?= workRender(['http://fondrazvitie.kz', '/img/portfolio/fondrazvitie.png', 'fondrazvitie.kz', 'Детский образовательный центр «Развитие»'], 'sameCarousel') ?>


        <?= workRender(['https://t.me/bonusok', '/img/portfolio/taxi-avatar.png', 'taxi bot', 'Telegram and Viber taxibot'], 'sameCarousel') ?>
    </div>
</div>

<footer class="page-footer <?= $mainColor ?>">
    <div class="container center-align"><a class="white-text" href="http://zce-elite.com">&copy; ZCE Elite Group</a>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <h6 class="white-text center-align">
                Группа разработчиков
                <a href="http://finistcom.kz/" class="white-text">Компании ФИНИСТ</a>
            </h6>
        </div>
    </div>
</footer>

<footer>

</footer>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

<script>
    $(function () {
        $('.cards').each(function() {
            $(this).find('> .col > .card').matchHeight();
        });
        $('.sameCarousel').matchHeight();
        $('.sameCard').matchHeight();
        $('.sameObk').matchHeight();

        $('.bobek-work').carousel({fullWidth: true});

        $('nav .button-collapse')
            .sideNav({menuWidth: 250, draggable: true, closeOnClick: true});

        $('.scrollspy').scrollSpy();
    });
</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">(function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter23645401 = new Ya.Metrika({
                    id: 23645401,
                    webvisor: true,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true
                });
            } catch (e) {
            }
        });
        var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () {
            n.parentNode.insertBefore(s, n);
        };
        s.type = "text/javascript";
        s.async = true;
        s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";
        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks");</script>
<noscript>
    <div><img src="//mc.yandex.ru/watch/23645401" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript><!-- /Yandex.Metrika counter -->
<script>(function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o), m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-30531360-4', 'zce-elite.com');
    ga('send', 'pageview');</script>
</body>
</html>