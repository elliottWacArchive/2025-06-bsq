<?php

include_once 'functions/find_biggest_square.php';
include_once 'functions/arr_from_map.php';
include_once 'functions/map_from_arr.php';
include_once 'functions/draw_square.php';

if ($argc < 2) {
    echo "php bsq.php <map_file>\n";
    exit(1);
}
$map = arr_from_map($argv[1]);
$values = find_biggest_square($map);
// echo "row " . $values['row'] . " col " . $values['col'] . " size " . $values['size'] . "\n";
draw_square($map, $values['row'], $values['col'], $values['size']);
map_from_arr($map);