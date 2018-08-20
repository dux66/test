<?php
$name=$_GET['pi'];
$fff=$_GET['fi'];
$uuu=$_GET['ui'];

$qi=(isset($_GET['qi'])) ? $_GET['qi'] : 'qqq';
print_r($name);
echo '<br />';
print_r($fff);
echo '<br />';
print_r($uuu);
echo '<br />';
print_r($qi);

(1>5) ? $str='true' : $str='no';
print_r($str); 
echo '<br />';
$names=explode(".",$_SERVER['HTTP_HOST']);
print_r($names);
$nameis=$names[0].$names[1].$names[2];
print_r($nameis);
echo '<br />';
$str1=str_replace('b','a','babbabab');
print_r($str1);
echo '<br />';

$os=getOS();
print_r($os);
?>