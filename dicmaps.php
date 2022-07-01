<?php

$fp = fopen("text.txt", "r");
//fscanf($fp, "%[^\n]", $count);

$count = strlen(fgets($fp));
var_dump(fgets($fp));
fclose($fp);
$i = 0;
$users = [];

while (($line = fgets($fp)) !== false) {
    echo 'hi';
    if ($i < $count) {
        $data = explode(' ', $line);
        var_dump($data);
        $users[trim($data[0])] = trim($data[1]);
    } else {
        print($users[trim($line)] ? trim($line) . '=' . $users[trim($line)] : 'Not Found') . PHP_EOL;
    }

    $i++;
}