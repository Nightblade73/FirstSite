<?php

class Model_Catalog extends Model
{
	public function get_data($start = 0, $finish = 100000)
	{	
        $mysqli = new mysqli('localhost', 'root', '5730', 'fireworks');
        if (mysqli_connect_errno()) {
            echo 'Ошибка подключения к серверу MySQL. Код ошибки:' . mysqli_connect_error();
            exit;
        }
            $sqlStr = 'SELECT F.id_firework, F.name, F.price, D.description_text, D.shoot_count, C.caliber_num, D.time
                    FROM firework F JOIN description D
                    ON F.id_desc = D.id_desc
                    JOIN caliber C
                    ON D.id_caliber = C.id_caliber
                    WHERE (F.price>=' . $start . ') AND (F.price<=' . $finish . ')';

            $res = mysqli_query($mysqli, $sqlStr);
          //  $res->data_seek(12001);
            return $res;
//        getInformationById(12001);
//        getInformationById(506);
//        getInformationById(851);
//        getInformationById(497);
//        getInformationById(852);
//        getInformationById(706);
//        getInformationById(8460);
//        getInformationById(720);
//        getInformationById(707);
//        getInformationById(610);
//        getInformationById(340);
//        getInformationById(342);
//        getInformationById(502);
//        getInformationById(7064);
    }
	
}

