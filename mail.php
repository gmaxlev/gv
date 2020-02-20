<?php

$name = $_GET['name'];
$phone = $_GET['phone'];
$title = $_GET['title'];
$answer1 = $_GET['answer1'];
$answer2_1 = $_GET['q2_1_answer'];
$answer2_2 = $_GET['q2_2_answer'];
$answer2_4 = $_GET['q2_4_answer'];
$answer3 = $_GET['answer3'];
$answer4 = $_GET['answer4'];
$answer5 = $_GET['answer5'];
$answer6 = $_GET['answer6'];

$subject = 'Потрібен розрахунок вартості';
$addressat  = 'tkachuk.olexiy@gmail.com' . ', ';
$addressat  .= 'vitacuk@bigmir.net';
$from = 'manager@gv-kuhni.com.ua';
$headers = "Content-Type: text/html; charset=UTF-8";
$message = "Ім’я: {$name}<br>Телефон: {$phone}<br>Форма: {$answer1}<br>Довжина: {$answer2_1} см<br>Ширина справа: {$answer2_2} см<br>Ширина зліва: {$answer2_4} см<br>Фасади: {$answer3}<br>Стільниця: {$answer4}<br>Фурнітура: {$answer5}<br>Подарунок: {$answer6}";
$verify = mail($addressat, $subject, $message, $headers, "-f " . $from);

$name = $_GET['name'];
$phone = $_GET['phone'];
$title = $_GET['title'];
$answer1 = $_GET['answer1'];
$answer2_1 = $_GET['q2_1_answer'];
$answer2_2 = $_GET['q2_2_answer'];
$answer2_4 = $_GET['q2_4_answer'];
$answer3 = $_GET['answer3'];
$answer4 = $_GET['answer4'];
$answer5 = $_GET['answer5'];
$answer6 = $_GET['answer6'];
$token = "677282512:AAG3vD2e4CfhzPLXtWNTfTzQGZ4AwsQ0gcg";
$chat_id = "-344646003";
$arr = array(
'Ім’я:' => $name,
'Телефон:' => $phone,
'Форма:' => $answer1,
'Довжина:' => $answer2_1,
'Ширина справа:' => $answer2_2,
'Ширина зліва:' => $answer2_4,
'Фасади:' => $answer3,
'Стільниця:' => $answer4,
'Фурнітура:' => $answer5,
'Подарунок:' => $answer6
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

?>