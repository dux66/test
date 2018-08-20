<?php
echo '<pre>';
$arr=unserialize($_COOKIE['history']);
print_r($arr);

$url = $_SERVER['REQUEST_URI'];
var_dump($url);
array_unshift($arr,"45456");
var_dump($arr);
?>