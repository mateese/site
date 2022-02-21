<?php

/* https://api.telegram.org/bot5264010752:AAGBJ3HschecvFG3RwvbSf9J0O2Hz7OZOK0/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['gmail'];
$token = "5264010752:AAGBJ3HschecvFG3RwvbSf9J0O2Hz7OZOK0";
$chat_id = "-604018967";
$arr = array(
  'Ім`я клієнта: ' => $name,
  'Телефон: ' => $phone,
  'Email' => $email
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