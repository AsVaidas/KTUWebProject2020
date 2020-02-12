<?php

function getString($option) {
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

function getStringList($option) {
    $dir = dirname(__FILE__);

    $lines = explode("\n", file_get_contents($dir."/Messages.yml"));
    $array = explode(".", $option);
    $i = 0;
    $return = array();
    foreach ($lines as $line) {
        $line = str_replace("\r", "", $line);
        $line = str_replace("\n", "", $line);
        if (strpos($line, $array[$i].":") !== false) {
            $i++;
            if (sizeof($array) == $i) {
                for ($j = $i; $j < sizeof($lines); $j++) {
                    if (strpos($lines[$j], "-") !== false) {
                        array_push($return, explode("- ", $lines[$j])[1]);
                    }
                }
                
                return $return;
            }
        }
    }
}