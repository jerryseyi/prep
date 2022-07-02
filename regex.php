<?php

$data = [];
$firstNameEmailID = 'James james@doe.com, John john@doe.com';

//$hello = 'hi there';
//var_dump(explode(' ', $hello));
$length = strlen($firstNameEmailID);
$firstNameEmailID = explode(' ', $firstNameEmailID);
//var_dump($firstNameEmailID);


for ($i = 0; $i < 2; $i++) {

    $firstName = $firstNameEmailID[$i];
    $emailID = $firstNameEmailID[1];

    preg_match('/([a-z]+)@gmail.com/', $emailID, $matches);

    var_dump($matches);
    if (isset($matches[1])) {
        var_dump('hi');
        $data[] = $firstName;
    }
}

sort($data);
echo implode(' ', $data);