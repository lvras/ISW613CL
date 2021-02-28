<?php

$file = $argv[1];

$handler = fopen($file, "r");

$tp = array();
$list = array();
$texto = array();
$pais = array();
$capital = array();
while (!feof($handler)) {
    $data = fgets($handler);
    $tp = explode(",", nl2br($data));
    foreach ($tp as $key => $value) {
        $texto = explode('"', $value);
        foreach ($texto as $key => $value) {
            if ($key == 1) {
                array_push($pais, $value);
            } elseif( $key == 3){
                array_push($capital, $value);
            }
        }
    }
}
fclose($handler);

$list = array_combine($pais, $capital);

ksort($list);

foreach ($list as $country => $capital) {
    echo 'The capital of '.$country. ' is '.$capital.PHP_EOL;
}

