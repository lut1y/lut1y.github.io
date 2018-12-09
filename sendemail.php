<?php
$name       = @trim(urldecode(htmlspecialchars($_POST['name'])));
$from       = @trim(urldecode(htmlspecialschars($_POST['email'])));
//$subject    = @trim(stripslashes($_POST['subject']));
$subject    = 'Заявка с сайта';
$message    = @trim(stripslashes($_POST['message']));
$to   		= 'lut1y@mail.ru';//replace with your email

$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=iso-8859-1";
$headers[] = "From: {$name} <{$from}>";
$headers[] = "Reply-To: <{$from}>";
$headers[] = "Subject: {$subject}";
$headers[] = "X-Mailer: PHP/".phpversion();

if(mail($to, $message, $headers))
{
    echo "Сообщение успешно отправлено!"
} else
{
    echo "Есть ошибки!"
};

?>