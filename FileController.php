<?php

function loadFile(string $input) {
    $fd = fopen($input, 'r') or die("не удалось открыть файл");
    while (!feof($fd)) {
        $str = htmlentities(fgets($fd));
        echo '<p>' . $str . '</p>';
    }
    fclose($fd);
}

function saveFile($logtext, $dirfile, $logdir = 'log_files') {
    $home_dir = str_replace($_SERVER['DOCUMENT_ROOT'], "", str_replace("\\", '/', $dirfile));
    $real_log_dir = $_SERVER['DOCUMENT_ROOT'] . $home_dir . '/' . $logdir;
    if (!is_dir($real_log_dir)) {
        mkdir($real_log_dir, 0777);
    } else {
        chmod($real_log_dir, 0777);
    }
    if (!is_file($real_log_dir . '/.htaccess')) {
        $h = fopen($real_log_dir . '/.htaccess', 'wb');
        fwrite($h, "order allow,deny\nallow from 127.0.0.1\n");
        fclose($h);
    }
    $real_log_file = $real_log_dir . '/' . date('Y-m-d') . '.log';
    $h = fopen($real_log_file, 'ab');
    fwrite($h, date('Y-m-d H:i:s ') . '[' . addslashes($_SERVER['REMOTE_ADDR']) . '] ' . $logtext . "\r\n");
    fclose($h);
}
