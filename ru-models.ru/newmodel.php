<!DOCTYPE html>
<html lang="ru-RU">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>Новые лица | Модельное агентство RU Models</title>
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

    <div class="container" id="models">
        <!-- <div class="row models_search search">
            <input id="modelsearch" class="models_search__input" type="text" placeholder="Поиск модели по имени" />
        </div> -->

        <div class="row models-list">
            <ul class="models-list__list list">
                <?php
                require_once 'vendors/connect.php';

                $currentDate = date('Y-m-d');
                $thirtyDaysAgo = date('Y-m-d', strtotime('-30 days'));

                $request = mysqli_query($connect, "SELECT * FROM `models` WHERE Date BETWEEN '$thirtyDaysAgo' AND '$currentDate'");

                while ($result = mysqli_fetch_array($request)) {
                    echo
                        '<li class="col-xs-4 col-md-2 models-list__list__item">
                            <a href="model.php?ID=' . $result['ID'] . '" class="models-list__link" >
                                <div class="model_photo_34wrapper">
                                    <div class="model_photo_wrapper">
                                        <img class="lazyload models-list__image" src="assets/images/ajax-loader.gif" data-src="uploads/' . $result['Photos'] . '/' . $result['Avatar'] . '" />
                                    </div>
                                </div>

                                <p class="name">' . $result['Name'] . '</p>
                                <div class="photoinner">
                                </div>
                            </a>
                        </li>';
                }
                ?>
            </ul>
        </div>
    </div>

    <script type="text/javascript">
        jQuery(document).ready(function () {
            var options = {
                valueNames: ['name']
            };
            var userList = new List('models', options);

            // lazy
            var myLazyLoad = new LazyLoad();

            // Alphabet
            // jQuery(".letter").click(function () {
            //     jQuery("#modelsearch").val("");
            //     userList.search();

            //     var currentLetter = jQuery(this).data("letter");
            //     var startDiv = jQuery(".letter_start[data-letter='" + currentLetter + "']");
            //     jQuery('html, body').animate({
            //         scrollTop: startDiv.offset().top
            //     }, 500);
            //     return false;
            // });
        });
    </script>

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