<?php

$recepient = "dybrovin.ko@mail.ru";
$sitename = "сельхоз услуги"

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$text = trim($_POST["user_message"]);
$message = "Имя: $name \nТелефон: $phone \nСообщение: $text";

$pagetitle = "Заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");