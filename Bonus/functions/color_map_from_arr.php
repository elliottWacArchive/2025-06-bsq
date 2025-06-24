<?php

function color_map_from_arr($map)
{
    foreach ($map as $row) {
        foreach ($row as $element) {
            if ($element == 'x') {
                echo "\e[32m" . $element . "\e[0m";
            } elseif ($element == 'o') {
                echo "\e[31m" . $element . "\e[0m";
            } else {
                echo "\e[34m" . $element . "\e[0m";
            }
        }
        echo "\n";
    }
}
