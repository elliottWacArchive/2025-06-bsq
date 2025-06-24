<?php

function map_from_arr($map)
{
    foreach ($map as $row) {
        echo implode('', $row) . "\n";
    }
}
