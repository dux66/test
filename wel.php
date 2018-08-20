<?php
session_start();
echo '登录成功<br />';

echo 'hello，'.$_SESSION['name'].',welcome to login';
?>