<?php
 $name = $_POST['name'];
 $tel = $_POST['tel'];
 $email = $_POST['email'];
 $msg = $_POST['message'];

 $name = htmlspecialchars($name);
 $tel = htmlspecialchars($tel);
 $email = htmlspecialchars($email);
 $msg = htmlspecialchars($msg);

 $name = urldecode($name);
 $tel = urldecode($tel);
 $email = urldecode($email);
 $msg = urldecode($msg);

 $name = trim($name);
 $tel = trim($tel);
 $email = trim($email);
 $msg = trim($msg);

 $msg = wordwrap($msg, 70, "\r\n");

 $headers = 'hozpolufa.ru' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail("muhp@yandex.ru", "Отзыв с сайта", "Имя: ".$name.". E-mail: ".$email." Сообщение: ".$msg." Телефон: ".$tel, $headers );
header("Location: ../../contacts");

