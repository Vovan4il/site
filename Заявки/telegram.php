<?php
$name = $_POST('user-name');
$phone = $_POST('user-phone');
$email = $_POST('user-email');
$token = "5769951429:AAFOOyZwunwLrHXdWLIdH9B_0yrcCpwvbmQ";
$chat_id = "-641511204";

$arr = array(
    'Імя:' => $name,
    'Телефон:' => $phone,
    'email:' => $email
)
foreach($arr as $key => $value) {
    $txt .= "<br>".$key."<br>".$value."%0A"
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$text}", "r");

if ($sendToTelegram) {
    echo `<h1 class="sucess">Дяую за відправку</h1>`
    return true;
} else {
   echo "Error"
}
?>