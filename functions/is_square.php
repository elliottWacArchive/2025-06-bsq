<?php

function is_square(array $map, int $row, int $col, int $size): bool
{
    for ($i = $row; $i < $row + $size; $i++) {
        for ($j = $col; $j < $col + $size; $j++) {
            if ($map[$i][$j] == 'o') {
                return false;
            }
        }
    }
    return true;
}
