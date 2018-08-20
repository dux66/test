<?php
echo '<pre>';
echo $_COOKIE['xd1'];
echo $_COOKIE['dx2'];
echo '提交方式：';
echo $_SERVER['REQUEST_METHOD'];
print_r($_GET);
print_r($_REQUEST);
echo '<hr />';
print_r($_POST);
print_r($_REQUEST);
//$list1=$_GET;
//echo 'yourname is :',$list1['name'];
//如果表单里既有post的值又有get的值且键还相同，以post的为准
?>