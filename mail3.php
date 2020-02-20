<?php

$name = $_GET['name'];
$phone = $_GET['phone'];

$subject = 'Візит в шоу-рум';
$addressat  = 'tkachuk.olexiy@gmail.com' . ', ';
$addressat  .= 'vitacuk@bigmir.net';
$from = 'manager@gv-kuhni.com.ua';
$headers = "Content-Type: text/html; charset=UTF-8";
$message = "Ім’я: {$name}<br>Телефон: {$phone}";
$verify = mail($addressat, $subject, $message, $headers, "-f " . $from);

$blank = "";
  $name = $_GET['name'];
$phone = $_GET['phone'];
$token = "677282512:AAG3vD2e4CfhzPLXtWNTfTzQGZ4AwsQ0gcg";
$chat_id = "-344646003";
$arr = array(
'Візит в шоу-рум' => $blank,
'Ім’я:' => $name,
'Телефон:' => $phone,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

?>