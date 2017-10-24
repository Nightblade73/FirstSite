<?php

function loadFile(string $input) {
    $fd = fopen($input, 'r') or die("не удалось открыть файл");
    while (!feof($fd)) {
        $str = htmlentities(fgets($fd));
        echo '<p>' . $str . '</p>';
    }
    fclose($fd);
}
