<?php

$file = $argv[1];

$handler = fopen($file, "r");

$tp = array();
while (!feof($handler)) {
    $data = fgets($handler);
    $tp = explode(",", nl2br($data));
}
fclose($handler);

sort($tp);
$temp_uniq = array_unique($tp);

$sum = 0;
foreach ($temp_uniq as $key => $value) {
    $sum += $value;
}
$prom = $sum / count($temp_uniq);
echo 'Average temperature is: ' .round($prom, 1).PHP_EOL;

$cont1 = 0;
echo 'List of 5 lowest temperatures: ';
foreach ($temp_uniq as $key => $value) {
    if ($cont1 < 4) {
        echo $value. ',';
    } else if ($cont1 == 4) {
        echo $value. '.'.PHP_EOL;
    }
    $cont1++;
}

$temp_temp = array_reverse($temp_uniq);
$cont2 = 0;
echo 'List of 5 highest temperatures: ';
$temp_rever = array();
foreach ($temp_temp as $key => $value) {
    if ($key < 5) {
        array_push($temp_rever, $value);
    } else if ($key == 6) {
        sort($temp_rever);
        foreach ($temp_rever as $key => $value) {
            if ($cont2 < 4) {
                echo $value. ',';
            } else if ($cont2 == 4) {
                echo $value. '.';
            }
            $cont2++;
        }
    }
}