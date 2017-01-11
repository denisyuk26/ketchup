<?php

$recepient = "sergey.denisyuk@gmail.com";
$sitename = "Название сайта";

$name = trim($_GET["name"]);
$email = trim($_GET["email"]);
$title = trim($_GET["title"]);
$message = trim($_GET["message"]);


$pagetitle = "Новая заявка с сайта \"$sitename\"";
$message = "Имя: $name \nПочта: $email \nТема: $title \nСообщение: $message";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");