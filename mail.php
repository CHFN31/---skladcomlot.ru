<?php

$to = 'skladkomlot@gmail.com';
$name = clear_data($_POST['name']);
$phone = clear_data($_POST['phone']);
$email = clear_data($_POST['email']);
$text = clear_data($_POST['text']);
$subject = 'Заявка с сайта';

//$headers = "From: webmaster@site.ru\r\n";
//$headers = "Reply-To: webmaster@site.ru\r\n";
//$headers = "X-Mailer: PHP/". phpversion();
//$headers = "Content-type: text/html; charset=utf-8\r\n";

$headers = [
    "From" => "webmaster@site.ru",
    "Reply-To" => "webmaster@site.ru",
    "X-Mailer" => "PHP/". phpversion(),
    "Content-type" => "text/html;"
];

$message = '
<html>
<body>
<center>
<table border="1" cellpadding="6" cellspacing="0" width="90%" bordercolog="#DBDBDB">
<tr><td colspan="2" align="center" bgcolor="#E4E4E4E4"><b>Информация о клиенте</b></td></tr>';

$message .= '<tr>
<td><b>Контактное лицо</b></td>
<td>'. $name .'</td>
</tr>';
'<tr>
<td><b>Телефон контактного лица</b></td>
<td>'. $phone .'</td>
</tr>';
'<tr>
<td><b>Email</b></td>
<td>'. $email .'</td>
</tr>';
'<tr>
<td><b>Сообщение</b></td>
<td>'. $text .'</td>
</tr>';

function clear_data($val){
    $val = trim($val);
    $val = stripslashes($val);
    $val = htmlspecialchars($val);
    return $val;
}
if (isset($_POST['formModal'])){
    mail($to, $subject, $message, $headers);
}
?>