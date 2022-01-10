<?php
/*
* Calendar
* Copyright Anton Dragomir
*/

class Engine
{

    private $_page_file = null;
    private $_error = null;

    public function __construct()
    {
            if (isset($_GET["page"])) {
                $this->_page_file = $_GET["page"];
                //Небольшая защита
                $this->_page_file = str_replace(".", null, $_GET["page"]);
                $this->_page_file = str_replace("/", null, $_GET["page"]);
                $this->_page_file = str_replace("", null, $_GET["page"]);
            } else {
                $this->_page_file = "main";
            }

    }
    /**
     * Записывает ошибку в переменную _error
     * @param string $error - текст ошибки
     */
    private function _setError($error)
    {
        $this->_error = $error;
    }

    /**
     * Возвращает текст ошибки
     */
    public function getError()
    {
        return $this->_error;
    }

    /**
     * Возвращает текст открытой страницы
     */
    public function getContentPage()
    {
        if (file_exists('pages/' . $this->_page_file . '.php')) {
            include 'pages/' . $this->_page_file . '.php';
        } else {
            include 'pages/404.php';
        }
    }

}
