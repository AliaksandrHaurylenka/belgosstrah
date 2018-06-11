<?php
// подключаем файл настроек
require_once dirname(__FILE__) . '/process_settings.php';

// открываем сессию
session_start();

// переменная, хранящая основной статус обработки формы
$data['result'] = 'success';

// обрабатывать будем только ajax запросы
if (empty($_SERVER['HTTP_X_REQUESTED_WITH']) || $_SERVER['HTTP_X_REQUESTED_WITH'] != 'XMLHttpRequest') {
  exit();
}
// обрабатывать данные будет только если они посланы методом POST
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
  exit();
}

include "Validate.php";

$stravita = new Validate;

//inputы формы для валидации
$name = $stravita -> val('name', 2, 100, 'Имя');
$age = $stravita -> val('age', 2, 20, 'Возраст');
$work = $stravita -> val('work', 2, 100, 'Работа');
$sport = $stravita -> val('sport', 2, 100, 'Спорт');
$sum = $stravita -> val('sum', 4, 20, 'Сумма');
$sum = $stravita -> val('sum', 4, 20, 'Сумма');
$phone = $stravita -> val('phone', 4, 20, 'Мобильный телефон');
$email = $stravita -> val('email', 4, 100, 'E-mail');



//var_dump($str);


