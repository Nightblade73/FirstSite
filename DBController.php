<?php

class DBController {
    var $mysqli;
    function connect() {
        /* Подключение к серверу MySQL */
         $mysqli = new mysqli('localhost', 'root', '5730', 'fireworks');
        if (mysqli_connect_errno()) {
            echo 'Ошибка подключения к серверу MySQL. Код ошибки:' . mysqli_connect_error();
            exit;
        } else {
            echo 'Подключение прошло успешно';
        }      
    }
    function disconnect()
    {
        $mysqli.close();
    }
}
