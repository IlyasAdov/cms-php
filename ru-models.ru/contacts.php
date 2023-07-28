<!DOCTYPE html>
<html lang="ru-RU">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>Контакты | Модельное агентство RU Models</title>
    <link rel="icon" type="image/png" href="" />

    <script type='text/javascript' src='jquery/jquery.js@ver=1.12.4'></script>
    <script type='text/javascript' src='jquery/jquery-migrate.min.js@ver=1.4.1'></script>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom -->
    <link rel="stylesheet" href="assets/style.css" type="text/css" media="all" />
    <link href="assets/css/style.css@v68.css" rel="stylesheet">
    <!-- FancyBox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>

    <?php require_once 'header.php'; ?>

    <div class="container agents__container">
        <div class="row">
            <div class="col-md-1 agent hidden-sm hidden-xs"></div>
            <div class="col-md-2 agent">
                <img src="assets/images/contact.svg" class="img-circle img__width" />
                <p class="agent_name">Александр</p>
                <p class="agent_jobtitle"><i>+ 7 968 013 1234</i></p>
                <p class="agent_contacts"><a href="mailto:ru-models@mail.ru">ru-models@mail.ru</a></p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div id="map"></div>
    </div>

    <div class="container contacts__container">
        <div class="row">
            <div class="col-md-4">
                <h2>Адрес</h2>
                <p>125196, Россия, Москва</p>
                <p>Пресненская набережная 8</p>
                <p><strong>Телефон:</strong> +7 968 013 1234</p>
                <p><strong>Часы работы:</strong> 11:00-19:00</p>
            </div>
            <div class="col-md-8">
                <h2>Мы на связи</h2>
                <p>Оставьте свою заявку, и мы свяжемся с вами.</p>
                <div role="form" lang="ru-RU" dir="ltr">
                    <div class="screen-reader-response"></div>
                    <form action="send.php" method="post" novalidate="novalidate">
                        <div class="row">
                            <div class="col-md-6">
                                <span class="aname"><input type="text" name="name"
                                        size="40"
                                        class="contact__form__input"
                                        aria-required="true" aria-invalid="false" placeholder="Ваше имя" required /></span><br>
                                <span class="company"><input type="text" name="company"
                                        size="40"
                                        class="contact__form__input"
                                        aria-required="true" aria-invalid="false"
                                        placeholder="Название компании" required /></span><br>
                                <span class="phone"><input type="text" name="phone"
                                        size="40"
                                        class="contact__form__input"
                                        aria-required="true" aria-invalid="false" placeholder="Номер телефона" required /></span>
                            </div>
                            <div class="col-md-6">
                                <span class="message"><textarea name="message" cols="40"
                                        rows="10"
                                        class="contact__form__textarea"
                                        aria-required="true" aria-invalid="false"
                                        placeholder="Опишите ваш запрос"></textarea></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="about_terms">Нажимая кнопку «Отправить», вы соглашаетесь на обработку
                                    персональных данных в соответствии с <a href="terms.php">Политикой
                                        конфиденциальности</a>.</p>
                                <p> <input type="submit" value="Отправить"
                                        class="col-md-6 btn btn-primary contact__form__submit" />
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- let's load map -->
    <script src="assets/js/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAElO7k2tNMcp5ARY-Bbn8WSnMJJ7W75oQ&callback=initMap"
        async defer></script>

    <?php require_once 'footer.php'; ?>

    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.js"></script>
    <script src="assets/js/lazyload.min.js"></script>
    <script src="assets/js/list.min.js"></script>

    <!-- Yandex.Metrika counter
    <script type="text/javascript">
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function () {
                try {
                    w.yaCounter25988716 = new Ya.Metrika({
                        id: 25988716,
                        webvisor: true,
                        clickmap: true,
                        trackLinks: true,
                        accurateTrackBounce: true
                    });
                } catch (e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/25988716" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    /Yandex.Metrika counter -->

    <!-- GA
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
                m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-54240784-1', 'auto');
        ga('send', 'pageview');
    </script>
    /GA -->
</body>

</html>