<?php
// if(empty($_POST['mail_to'])) exit("Введите адреѝ получателѝ");
// проверѝем правильноѝти заполнениѝ ѝ помощью регулѝрного выражениѝ
// if (!preg_match("/^[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}$/i", $_POST['mail_to'])) exit("pettrushkov@gmail.com");
$picture = "";
// Еѝли поле выбора вложениѝ не пуѝтое - закачиваем его на ѝервер
if (!empty($_FILES['fileFF']['tmp_name']))
{
    // Закачиваем файл
    $path = $_FILES['fileFF']['name'];
    if (copy($_FILES['fileFF']['tmp_name'], $path)) $picture = $path;
}
$headers = "Content-Type: text/html; charset=UTF-8";
$thm = "Потрібен розрахунок вартості";
$msg = "Ім’я: " . $_POST['nameFF'] . "<br>Телефон: " . $_POST['telFF'];
$mail_to = "vitacuk@bigmir.net" . ', ';
$mail_to .= "svitmebliv1@gmail.com" . ', ';
$mail_to .= "tkachuk.olexiy@gmail.com";
// Отправлѝем почтовое ѝообщение
if (empty($picture)) mail($mail_to, $thm, $msg, $headers);
else send_mail($mail_to, $thm, $msg, $picture, $headers);
// Вѝпомогательнаѝ функциѝ длѝ отправки почтового ѝообщениѝ ѝ вложением (Trianon)
function send_mail($mail_to, $thema, $html, $path)
{
    if ($path)
    {
        $fp = fopen($path, "rb");
        if (!$fp)
        {
            print "Cannot open file";
            exit();
        }
        $file = fread($fp, filesize($path));
        fclose($fp);
    }
    $name = "file.jpg"; // в ѝтой переменной надо ѝформировать имѝ файла (без вѝѝкого пути)
    $EOL = "\r\n"; // ограничитель ѝтрок, некоторые почтовые ѝервера требуют \n - подобрать опытным путём
    $boundary = "--" . md5(uniqid(time())); // любаѝ ѝтрока, которой не будет ниже в потоке данных.
    $headers = "MIME-Version: 1.0;$EOL";
    $headers .= "Content-Type: multipart/mixed; charset=UTF-8; boundary=\"$boundary\"$EOL";
    $headers .= "From: manager@gv-kuhni.com.ua";
    $multipart = "--$boundary$EOL";
    $multipart .= "Content-Type: text/html; charset=UTF-8$EOL";
    $multipart .= "Content-Transfer-Encoding: base64$EOL";
    $multipart .= $EOL; // раздел между заголовками и телом html-чаѝти
    $multipart .= chunk_split(base64_encode($html));
    $multipart .= "$EOL--$boundary$EOL";
    $multipart .= "Content-Type: application/octet-stream; name=\"$name\"$EOL";
    $multipart .= "Content-Transfer-Encoding: base64$EOL";
    $multipart .= "Content-Disposition: attachment; filename=\"$name\"$EOL";
    $multipart .= $EOL; // раздел между заголовками и телом прикрепленного файла
    $multipart .= chunk_split(base64_encode($file));
    $multipart .= "$EOL--$boundary--$EOL";
    if (!mail($mail_to, $thema, $multipart, $headers))
    {
        return False; //еѝли не пиѝьмо не отправлено
        
    }
    else
    { //// еѝли пиѝьмо отправлено
        return True;
    }
    exit;
}
$blank = "";
$name = $_POST['nameFF'];
$phone = $_POST['telFF'];
$token = "677282512:AAG3vD2e4CfhzPLXtWNTfTzQGZ4AwsQ0gcg";
$chat_id = "-344646003";
$arr = array(
    'Є готовий проект (файл на пошті)' => $blank,
    'Ім’я:' => $name,
    'Телефон:' => $phone,
);
foreach ($arr as $key => $value)
{
    $txt .= "<b>" . $key . "</b> " . $value . "%0A";
};
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");
?>
