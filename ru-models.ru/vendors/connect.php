<?php
$connect = mysqli_connect('localhost', 'root', 'root', 'ru-models');

if (!$connect) {
    die('Error connect to DataBase');
}

mysqli_set_charset($connect, "utf8");