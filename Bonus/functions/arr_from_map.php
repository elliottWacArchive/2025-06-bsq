<?php

function arr_from_map(string $filePath)
{
    $arr = [];
    $lines = "";
    $i = 0;

    if (!file_exists($filePath)) {
        throw new Exception("Fichier non trouvé: $filePath");
    }

    $fileContent = file_get_contents($filePath);

    while ($fileContent[$i] != "\n") {
        $lines .= $fileContent[$i];
        $i++;
    }
    $lines = intval($lines);
    $i++;
    for ($j = 0; $j < $lines; $j++) {
        $arr[$j] = [];
        while (isset($fileContent[$i]) && $fileContent[$i] != "\n") {
            array_push($arr[$j], $fileContent[$i]);
            $i++;
        }
        if (isset($fileContent[$i])) {
            $i++;
        }
    }
    return $arr;
}
