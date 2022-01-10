<?php 
/*
* Calendar
* Copyright Anton Dragomir
*/

require '/var/www/datery/data/autoloader.php';
// подключение движка
include_once '/var/www/datery/app/data/engine.php';
// создаем экземпляр
$engine = new Engine(); 
// выводим страницу сайта
$engine->getContentPage();

?>	