<?php

$offices = [
    'kiev, Ukraine'=>'zhilyanska, 5',
    'Chernihiv, Ukraine' =>'lenina 24',
    'Polotsk, Belorussia'=>'zubrovska, 7'
];
//foreach ($offices as $key=>$address){echo $key.PHP_EOL;}
$ip = '185.230.124.199'; //$_SERVER['REMOTE_ADDR'];
echo "your ip is: $ip \n";
$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
print_r($details) ;
