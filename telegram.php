<?php
/* https://api.telegram.org/bot750205650:AAGUT_-u8upxedTh0lwznEfr_W7aL9tg6_o/getUpdates,
 где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['name'];
$phone = $_POST['phone'];
$title = $_POST['title'];
$answer1 = $_POST['answer1'];
$answer2_1 = $_POST['q2_1_answer'];
$answer2_2 = $_POST['q2_2_answer'];
$answer2_4 = $_POST['q2_4_answer'];
$answer3 = $_POST['answer3'];
$answer4 = $_POST['answer4'];
$answer5 = $_POST['answer5'];
$answer6 = $_POST['answer6'];
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

foreach ($arr as $key => $value)
{
    $txt .= "<b>" . $key . "</b> " . $value . "%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

?>
