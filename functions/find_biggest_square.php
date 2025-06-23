<?php
function find_biggest_square($map)
{
    if (empty($map) || empty($map[0])) {
        return ['size' => 0, 'row' => 0, 'col' => 0];
    }

    $row = count($map);
    $col = count($map[0]);
    
    $dp = array_fill(0, $row, array_fill(0, $col, 0));
    
    $max_size = 0;
    $max_row = 0;
    $max_col = 0;
    
    for ($i = 0; $i < $row; $i++) {
        if ($map[$i][0] == '.') {
            $dp[$i][0] = 1;
            if ($max_size < 1) {
                $max_size = 1;
                $max_row = $i;
                $max_col = 0;
            }
        }
    }

    for ($j = 0; $j < $col; $j++) {
        if ($map[0][$j] == '.') {
            $dp[0][$j] = 1;
            if ($max_size < 1) {
                $max_size = 1;
                $max_row = 0;
                $max_col = $j;
            }
        }
    }

    for ($i = 1; $i < $row; $i++) {
        for ($j = 1; $j < $col; $j++) {
            if ($map[$i][$j] == '.') {
                $dp[$i][$j] = min($dp[$i-1][$j], $dp[$i][$j-1], $dp[$i-1][$j-1]) + 1;
                
                if ($dp[$i][$j] > $max_size) {
                    $max_size = $dp[$i][$j];
                    $max_row = $i;
                    $max_col = $j;
                }
            }
        }
    }
    // return $dp;
    return [
        'size' => $max_size,
        'row' => $max_row - $max_size + 1,
        'col' => $max_col - $max_size + 1,
    ];
}