<?php
$name = $_POST['name'];
$email = $_POST['email'];
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$name = urldecode($name);
$email = urldecode($email);
$name = trim($name);
$email = trim($email);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("lut1y@mail.ru", "Заявка с сайта", "Имя: ".$fio.". E-mail: ".$email ,"From: lut1y@mail.ru \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>