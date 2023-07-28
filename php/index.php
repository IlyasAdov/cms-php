<?php
require_once 'func.php';

if(isset($_POST['name']) && strlen($_POST['name']) > 0) {
    saveMessage();
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}

$messages = getMessages();
$messages = arrayMessages($messages);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Гостевая страница</title>
</head>
<body>
    <form method="post">
        <caption>Форма</caption><br><br>

        <div class="field">
            <label for="name">Имя:</label><br />
            <input type="text" name="name" id="name">
        </div>

        <div class="field">
            <label for="comment">Коментарий:</label><br />
            <textarea type="comment" name="comment" id="comment" cols="30" rows="10"></textarea>
        </div><br>

        <input type="submit" value="Отправить">
    </form>

    <?php if ($messages != null) : ?>
        <ul class="messages">
    <?php foreach($messages as $index => $message) : 
          list($name, $comment, $date) = explode("|", $message);?>
            <li class="message<?=$index + 1?>">
                <p><b><?=$name?></b> | <i><?=$date?></i></p>
                <p><?=nl2br(htmlspecialchars($comment))?></p>
            </li>
    <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>