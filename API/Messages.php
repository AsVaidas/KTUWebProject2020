<?php

function getMessage($option) {
    $dir = dirname(__FILE__);

    $lines = explode("\n", file_get_contents($dir."/Messages.yml"));
    $array = explode(".", $option);
    $i = 0;
    foreach ($lines as $line) {
        $line = str_replace("\r", "", $line);
        $line = str_replace("\n", "", $line);
        if (strpos($line, $array[$i].":") !== false) {
            $i++;
            if (sizeof($array) == $i) {
                return explode(": ", $line)[1];
            }
        }
    }
}