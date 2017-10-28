<?php

class DBController {

    var $mysqli;

    function connect() {
        /* Подключение к серверу MySQL */

        $GLOBALS['mysqli'] = new mysqli('localhost', 'root', '5730', 'fireworks');
        if (mysqli_connect_errno()) {
            echo 'Ошибка подключения к серверу MySQL. Код ошибки:' . mysqli_connect_error();
            exit;
        } else {
            echo 'Подключение прошло успешно ' . $GLOBALS['mysqli']->host_info;
        }
    }

    function disconnect() {
        $GLOBALS['mysqli'] . close();
        echo 'Отключение прошло успешно';
    }

    function getInformationById(int $id) {
        $sqlStr = 'SELECT F.name, F.price, D.description_text, D.shoot_count, C.caliber_num, D.time
                    FROM firework F JOIN description D
                    ON F.id_desc = D.id_desc
                    JOIN caliber C
                    ON D.id_caliber = C.id_caliber
                    WHERE id_firework=' . $id;
        $res = $GLOBALS['mysqli']->query($sqlStr);
        $res->data_seek(0);
        while ($row = $res->fetch_assoc()) {
            echo "<br> id = " . $row['F.name'];
        }
    }

}
