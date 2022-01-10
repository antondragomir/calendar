<?php
/*
 * Calendar
 * Copyright Anton Dragomir
 */
use Data\BaseConfig;

class gen_header
{

    public function __construct($title)
    {
        // подключаем класс шаблонизатора
        require_once BaseConfig::$vendor['smarty'] . '/Smarty.class.php';
        //экземпляр класса шаблона
        $smarty = new Smarty;
        // переменные
        $smarty->assign('title', $title);
        // язык
        // $smarty->assign('lang', $lang);

        // Подключаем шаблон
        $smarty->display('templates/default/header.tpl');
    }
}
