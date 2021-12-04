<?php

/* https://api.telegram.org/bot5012242379:AAFPNwideM2aggQVApjAuykV3QtQr1VC1ww/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$text = $_POST['user_text'];
$token = "5012242379:AAFPNwideM2aggQVApjAuykV3QtQr1VC1ww";
$chat_id = "-666902497";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Текст:' => $text
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>