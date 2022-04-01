<?php

// токен бота
 define('TELEGRAM_TOKEN', '5201093581:AAEuobwtz2wi6GZ2ujRd0X6FbktJZJ_ptfE');
 // ваш внутренний ID
 define('TELEGRAM_CHATID', '5233311475');
$message = 'Сообщение';
$ch = curl_init('https://api.telegram.org/bot'.TELEGRAM_TOKEN.'/sendMessage?chat_id='.TELEGRAM_CHATID.'&text='.$message); // URL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Не возвращать ответ
curl_exec($ch); // Делаем запрос
curl_close($ch); // Завершаем сеанс cURL

?>
