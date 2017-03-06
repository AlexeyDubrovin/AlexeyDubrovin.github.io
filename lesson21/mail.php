<?php
//Принимаем постовые данные
$main_form=$_POST['main_form'];
$username=$_POST['username'];
$email=$_POST['email'];
$user_message=$_POST['user_message'];
//Тут указываем на какой ящик посылать письмо
$to = "79991570874@yandex.ru";
//Далее идет тема и само сообщение
// Тема письма
$subject = "Заявка с сайта";
// Сообщение письма
$message = "
Какая из форм была заполнена: ".htmlspecialchars($main_form)."<br />
Имя пользователя: ".htmlspecialchars($username)."<br />
email: ".htmlspecialchars($email)."<br />
user_message: ".htmlspecialchars($user_message);
// Отправляем письмо при помощи функции mail();
$headers = "From: homework.sl <mail@stastroi.ru>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
// Перенаправляем человека на страницу благодарности и завершаем скрипт
header('Location: thanks.html');
exit();
?>