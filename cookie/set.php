<?php
//在设置cookie之前不要有任何的输出
echo '<pre>';
setcookie('dx','cookie11 set ok');//设置cookie	
setcookie('dx1','cookie22 set ok ',time() + 3600); //设置cookie，第一个参数为cookie名，第二个参数为值，第三个参数为cookie的过期时间，+为存活时间单位为S，-则为销毁
setcookie('dx2','cookie dx 2 set ok',time() + 36000, '/');//设置cookile，第三个参数且cookie生效的目录，缺省为当前页面所在目录,设置为/则根目录下都能访问到
echo $_COOKIE['dx']; //读取cookie
echo $_COOKIE['dx1'];
echo $_COOKIE['dx2'];

//让cookie过期1 设置null
setcookie('dx',null);//通过此种方式可以删除名为’dx‘的cookie值,删除后客户端将不会保存该cookie，也不能在获取
//echo '删除后：'.$_COOKIE['dx'];

//让cookie过期2  更改时间  此中方式要跟上第3个参数即路径
setcookie('dx2','',time() - 10,'/');

?>
