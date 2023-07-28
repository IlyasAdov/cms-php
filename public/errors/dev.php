<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ошибка</title>
</head>
<body>
    <style>
        p {
            font-size: 24px;
        }
        span {
            color: #ff5733;
        }
    </style>
    <h1>Произошла ошибка!</h1>
    <p><b>Код ошибки: </b><span><?= $errno ?></span></p>
    <p><b>Текст ошибки: </b><span><?= $errstr ?></span></p>
    <p><b>Файл ошибки: </b><span><?= $errfile ?></span></p>
    <p><b>Строка ошибки: </b><span><?= $errline ?></span></p>
</body>
</html>