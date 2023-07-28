<?php
function saveMessage() {
    $str = $_POST['name'] . '|' . $_POST['comment'] . '|' . date('Y-m-d H:i:s') . "\n***\n";
    file_put_contents('db.txt', $str, FILE_APPEND);
}

function getMessages() {
    return file_get_contents('db.txt');
}

function arrayMessages($messages) {
    $messages = explode("\n***\n", $messages);
    array_pop($messages);
    return $messages;
}