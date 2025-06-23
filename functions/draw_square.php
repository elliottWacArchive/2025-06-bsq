<?php

function draw_square(array &$map, int $row, int $col, int $size)
{
    if ($size == 0) {
        return;
    }

    if ($size == 1) {
        $map[$row][$col] = 'x';
        return;
    }

    for ($i = $row; $i < $size; $i++) {
        for ($j = $col; $j < $size; $j++) {
            $map[$i][$j] = 'x';
        }
    }
}