<?php
/*
 * Calendar
 * Copyright Anton Dragomir
 */
use Data\BaseConfig;

class gen_main
{

    public function __construct()
    {

        // подключаем класс шаблонизатора
        require_once BaseConfig::$vendor['smarty'] . '/Smarty.class.php';
        //экземпляр класса шаблона
        $smarty = new Smarty;

        /**
         * начало тела страницы
         */

        /**
         * конец тела страницы
         */

        // локальные переменные
        $smarty->assign('calendar', $calendar);
        // язык
        $smarty->assign('lang', $lang);

        //подключаем хедер
        require_once 'header.php';
        //генерация хедер
        new gen_header($lang['title']);
        // Подключаем шаблон
        $smarty->display('templates/default/main/main.tpl');

    }
}

new gen_main();

include_once 'templates/default/footer.tpl';
