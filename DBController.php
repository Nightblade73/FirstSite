<?php

class DBController {

    var $mysqli;

    function connect() {
        /* Подключение к серверу MySQL */

        $GLOBALS['mysqli'] = new mysqli('localhost', 'root', '5730', 'fireworks');
        if (mysqli_connect_errno()) {
            echo 'Ошибка подключения к серверу MySQL. Код ошибки:' . mysqli_connect_error();
            exit;
        }
    }

    function disconnect() {
        $GLOBALS['mysqli'] . close();
        echo 'Отключение прошло успешно';
    }

//    function getInformationById(int $id) {
//        $sqlStr = 'SELECT F.name, F.price, D.description_text, D.shoot_count, C.caliber_num, D.time
//                    FROM firework F JOIN description D
//                    ON F.id_desc = D.id_desc
//                    JOIN caliber C
//                    ON D.id_caliber = C.id_caliber
//                    WHERE id_firework = ' . $id . ';';
//
//        $res = $GLOBALS['mysqli']->query($sqlStr);
//        $res->data_seek(0);
//        $row = $res->fetch_assoc();
//        echo '<div class="element">';
//        echo '<img src="images/' . $id . '.jpg">';
//        echo '<p name="Name">' . $row['name'] . '</p>';
//        echo '<p>Цена: ' . $row['price'] . ' р.</p>';
//        echo '<p>Описание: ' . $row['description_text'] . '</p>';
//        echo '<p>Количество выстрелов: ' . $row['shoot_count'] . ' шт.</p>';
//        echo '<p>Калибр: ' . $row['caliber_num'] . '</p>';
//        echo '<p>Время: до ' . $row['time'] . ' секунд</p>';
//        echo '</div>';
//    }

    function getAllInfo() {

        function getInformationById(int $id) {
            $sqlStr = 'SELECT F.name, F.price, D.description_text, D.shoot_count, C.caliber_num, D.time
                    FROM firework F JOIN description D
                    ON F.id_desc = D.id_desc
                    JOIN caliber C
                    ON D.id_caliber = C.id_caliber
                    WHERE id_firework = ' . $id . ';';

            $res = $GLOBALS['mysqli']->query($sqlStr);
            $res->data_seek(0);
            $row = $res->fetch_assoc();
            echo '<div class="element">';
            echo '<img src="images/' . $id . '.jpg">';
            echo '<p name="Name">' . $row['name'] . '</p>';
            echo '<p>Цена: ' . $row['price'] . ' р.</p>';
            if (!empty($row['description_text'])) {
                echo '<p>Описание: ' . $row['description_text'] . '</p>';
            } else {
                echo '<p>Описание: Описание отсутствует</p>';
            }
            echo '<p>Количество выстрелов: ' . $row['shoot_count'] . ' шт.</p>';
            echo '<p>Калибр: ' . $row['caliber_num'] . '</p>';
            echo '<p>Время: до ' . $row['time'] . ' секунд</p>';
            echo '</div>';
        }

        getInformationById(12001);
        getInformationById(506);
        getInformationById(851);
        getInformationById(497);
        getInformationById(852);
        getInformationById(706);
        getInformationById(8460);
        getInformationById(720);
        getInformationById(707);
        getInformationById(610);
        getInformationById(340);
        getInformationById(342);
        getInformationById(502);
        getInformationById(7064);
    }

}
