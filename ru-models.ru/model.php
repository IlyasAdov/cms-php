<?php
    require_once 'vendors/connect.php';

    $request = mysqli_query($connect, "SELECT *  FROM `models` WHERE `ID` = '{$_GET['ID']}'");

    $result = mysqli_fetch_assoc($request);
?>

<!DOCTYPE html>
<html lang="ru-RU">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title><?= $result['Name'] ?> | Модельное агентство RU Models</title>
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

    <div class="container">
        <div class="row model_black_panel">
            <div class="col-md-4">
                <h1 class="model__title">
                    <?= $result['Name'] ?>
                </h1>
            </div>
            <div class="col-md-8 model_params">
                <ul class="model_param__list">
                    <li class="model_param__list_item"><span class="model_param__value">
                            <?= $result['Height'] ?>
                        </span></li>
                    <li class="model_param__list_item"><span class="model_param__value">
                            <?= $result['Dimensions'] ?>
                        </span></li>
                    <li class="model_param__list_item">Волосы
                        <?= $result['Hair'] ?>
                    </li>
                    <li class="model_param__list_item">Глаза
                        <?= $result['Eyes'] ?>
                    </li>
                    <li class="model_param__list_item">Обувь <span class="model_param__value">
                            <?= $result['Shoes'] ?>
                        </span></li>
                    <li class="model_param__list_item">Платье <span class="model_param__value">
                            <?= $result['Dress'] ?>
                        </span></li>
                </ul>
            </div>
        </div>

        <div class="row" id="main_content">
            <div class="col-md-4">
                <img width="360" height="480" src="uploads/<?= $result['Photos'] ?>/<?= $result['Avatar'] ?>"
                    class="model__mainphoto wp-post-image" alt="" />
                <div class="model_buttons_panel">
                </div>

                <div class="hidden-sm hidden-xs model_buttons_panel">

                    <button class="btn btn-primary" class="book_a_model__button" data-fancybox="book_a_model"
                        data-src="#bookmodelform">Забукировать модель</button>
                </div>
            </div>

            <div class="col-md-8 nopadding nomargin">
                <div class="portfolio">
                    <ul class="row portfolio__list">
                        <?php
                        $folderPath = 'uploads/' . $result['Photos'] . '/photos';

                        $files = scandir($folderPath);

                        foreach ($files as $file) {
                            $filePath = $folderPath . '/' . $file;

                            if (is_file($filePath) && getimagesize($filePath)) {
                                echo '<li class="col-xs-4 col-md-2 nopadding nomargin portfolio__list__item">
                                        <a href="' . $filePath . '" data-fancybox="gallery">
                                            <img src="' . $filePath . '" alt="" class="portfolio__list__item__image" />
                                        </a>
                                    </li>';
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <!-- mobile menu -->
        <div class="row visible-sm visible-xs model_buttons_panel" id="mobile_menu">
            <div class="col-sm-12">

                <button class="btn btn-primary" class="book_a_model__button" data-fancybox="book_a_model_mobile"
                    data-src="#bookmodelform">Забукировать модель</button>
            </div>
        </div>
        <!-- /mobile menu -->
    </div>

    <div id="bookmodelform" style="display:none;">
        <div role="form" lang="ru-RU" dir="ltr">
            <div class="screen-reader-response"></div>
            <form action="send.php" method="post" novalidate="novalidate">
                <p><label> Ваше имя *<br />
                        <span class="aname"><input type="text" name="name" size="40"
                                aria-required="true"
                                aria-invalid="false" required /></span> </label></p>
                <p><label> Название компании *<br />
                        <span class="company"><input type="text" name="company" size="40" aria-required="true" aria-invalid="false" required /></span> </label></p>
                <p><label> Номер телефона *<br />
                        <span class="phone"><input type="text" name="phone"size="40" aria-required="true" aria-invalid="false" required /></span> </label></p>
                <p><label> Опишите ваш запрос *<br />
                        <span class="message"><textarea name="message" cols="40" rows="10"
                                aria-required="true" aria-invalid="false"></textarea></span> </label></p>
                <input type="hidden" name="model" value="<?= $result['Name'] ?>" id="form-model-name" />
                <p><input type="submit" value="Отправить" /></p>
            </form>
        </div>
    </div>

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