<?php
$arr=array(1,2,3,4,5);
var_dump($arr);
echo '<hr />';
foreach($arr as $ky => $val) {
	$val = $val + 1;
	echo $ky.':'.$val.'<br />';
}
?>