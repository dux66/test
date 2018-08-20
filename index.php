<?php
$url="127.0.0.1/cookie/use.php";
$uri=$_SERVER['REQUEST_URI'];
$new_url="http://".$url.$uri;
header("location:$new_url");
?>





