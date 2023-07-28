<?php

$name = $_POST['name'];
$company = $_POST['company'];
$phone = $_POST['phone'];
$message = $_POST['message'] ? '\nСообщение: '.$_POST['message'] : '';
$model = $_POST['model'] ? '\nЗаинтересованная модель: '.$_POST['model'] : '';

$to = "ilyaskel27@mail.ru";
$subject = "Сообщение с сайта ru-models.ru";
$message = "Имя: ".$name."\nКомпания: ".$company."\nТелефон: ".$phone.$message.$model;

$headers = "From: ru-models.ru\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

$mailSent = mail($to, $subject, $message, $headers);

$previousPage = $_SERVER['HTTP_REFERER'];
header("Location: $previousPage");