<?php

class ValidationController {

    function check_email(string $email, string $name) {
        $var = '';
        var_dump($email);
         var_dump($name);
        if (!filter_input(INPUT_GET, $name, FILTER_VALIDATE_EMAIL) === false) {
            $var = 'Заказ оформлен на адрес:<br>' . $email;
        } else {
            $var = 'Заказ не оформлен<br>Электронный адрес не верный';
        }
        echo '<script>
                                $(document).ready(function () {                             
                                    setTimeout("$(\'#infoblock\').slideToggle(\'slow\');", 1000);
                                    document.getElementById("infoblock").innerHTML="<a>' . $var . '</a>";
                                    setTimeout("$(\'#infoblock\').slideToggle(\'slow\');", 6000);                              
                            });
                            </script>';
    }

}
