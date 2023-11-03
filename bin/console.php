<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Drlenux\LargeArray\LargeArray;

function generateRandomString($length = 10) {
	return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

$arr = new LargeArray();
$length = 1000000000;
$str = generateRandomString(1000000);

for ($i = 0; $i < $length; $i++) {
	$arr[] = $str;
}
