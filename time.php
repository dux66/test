<?php
echo time(),'<br />';//精确到秒
echo microtime(),'<br />';//精确到微秒
var_dump(microtime(true));//精确到微秒,返回一个float类型的数
echo date('Y-m-d H:i:s');//返回的时间比当前时简少了8小时，时区问题,需要在php.ini中更改date.timezone的值  date.timezone = Asia/shanghai,或者函数中来更改
echo date_default_timezone_get();//查看当前系统中设置的时区
date_default_timezone_set('PRC');//或者设置为Asia/shanghai 
echo '<hr />';
echo date('今天是公历Y-m-d  时间H:i:s   星期N   本月共有t天',time());

echo '<hr />';
echo gmdate('Y-m-d H:i:s'),'<br />';//gmdate永远都只是格式化GMT时间

var_dump(localtime());//返回一个索引数组，默认带餐宿time()
echo '<br />';
var_dump(localtime(time(),true)); //第二个餐宿增加一个 true，返回关联数组
echo '<hr />';

//mktime 获取一个日期的unix 时间戳
echo time(),'==>',@mktime(),'<br />'; //mktime()如果不传参的话返回和time一样，//加上@可以屏蔽错误显示
echo '获取2018年6月6日15点42分30秒的时间戳：';
echo mktime(15,42,30,6,6,2018);//获取2018年6月6日15点42分30秒的时间戳，参数依次为：时，分，秒，月，日，年
echo '<br />';
echo '可以通过date函数来验证是否正确：';
echo date('Y-m-d H:i:s',mktime(15,42,30,6,6,2018));
echo '<hr />';
$sdate='2018-8-8 16:06:06';
$sdatetime=strtotime($sdate);
print_r($sdatetime);
echo '<br />';
//var_dump(mktime(16,6,6,8,8,2018));

//计算页面耗时时间
$start_time=microtime(true);
for($i=1;$i<10000;$i++){
	//循环10000次
}
$end_time=microtime(true);
$use_time=$end_time-$start_time;
echo '页面耗时:';
print_r($use_time);






?>