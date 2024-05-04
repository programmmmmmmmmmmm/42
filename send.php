<?php
$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];

$name = trim(urldecode(htmlspecialchars($name)));
$email = trim(urldecode(htmlspecialchars($email)));
$msg = trim(urldecode(htmlspecialchars($msg)));

if(mail("cyril.volck@yandex.ru",
    "Новый запрос",
    "<h1> На сайте остановлена заявка</h1>
    <br>от:<b>".$name."</b>
    <br>email:<b>".$email."</b>
    <br>комментарий:".$msg."
    <br>Поздравляем с новой заявкой",
    "From: 1с-webdevelopment.ru\r\n". "Content-type: text/html\r\n"))

{
    echo "{'status': 'ok'}";
}else{
    echo "{'status': 'error'}";
}

?>
