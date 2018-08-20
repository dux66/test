<?php
header("content-type:text/html;charset=utf-8");
echo '数组';
echo '<br />';
//创建数组1--关联数组
$arr=array('name'=>'dx','age'=>18,'high'=>165);
//var_dump($arr);
echo '<br />';
print_r($arr);
unset($arr['high']); // unset 删除元素
echo '<br />';
print_r($arr);
//索引数组
echo '<br />','索引数组';
$arr4=[1,2,3,4];
print_r($arr4);
//创建数组2
echo '<br />';
$arr1[0]='zhangsan';
$arr1[1]='asin';
$arr1['age']=08;
$arr1[]='test'; //键为空时会自动设置为数组内整型键+1，这里会被自动设置为2
print_r($arr1);
//创建数组3
echo '<br />';
$arr3=['name'=>'lisi','age'=>20,'where'=>'china'];
print_r($arr3);
//访问数组元素
echo '<br />';
if (isset($arr['sex'])==false) {
	$arr['sex']='男'; //添加元素，如果已经存在，则会被修改
}
echo 'hello,my name is ',$arr['name'],'<br />',$arr['sex'],'<br />','my age is',$arr['age'];

//多维数组
$arr5=[
	'a'=>[1,2,3,'a1'=>[11,22,33]],
	'b'=>[12,13,14]
];
print_r($arr5);
echo '<br />';

$arr = ['name'=>'王麻子','sex'=>'男','age'=>'18','hige'=>180,'path'=>'china'];
/** var_dump(each($arr));
echo '<br />';
var_dump(each($arr));
echo '<br />';**/
echo '<hr />';
//$key=key($arr);
//print_r($key);
echo '<br />';
//var_dump(current($arr));
var_dump(next($arr));
echo '<br />';
var_dump(next($arr));
echo '<br />';
next($arr);
var_dump(current($arr));
echo '<br />';
next($arr);
var_dump(current($arr));
echo '<br />';
next($arr);
var_dump(current($arr));
echo '<br />';
var_dump(reset($arr));//指针复位
echo '<hr />';
while($value=current($arr)) {
	echo key($arr),'=>',$value,'<br />';
	next($arr);
}
var_dump(reset($arr));	
echo '<hr />';
list($key,$val,)=each($arr);
echo $key,'=>',$val,'<br />';
list($key,$val,)=each($arr);
echo $key,'=>',$val,'<br />';

var_dump(count($arr));//count,获得数组元素个数，长度
echo '<br />';
var_dump(implode('#',$arr)); //转换拼接数组内元素为字符串，第一个参数为拼接符，第二个是要转换的数组
echo '<br />';
var_dump(explode('#',"王麻子#男#18#180#china"));//将字符串通过#分割转换成数组
echo '<br />';

//in_array 判断值
echo '判断值是否存在<br />';
var_dump(in_array('王麻子',$arr));//判断数组内是否存在这个值，存在则返回true，不存在返回false
echo '<br />';
var_dump(in_array('张三',$arr));
echo '<br />';

//array_key_exists,判断键是否存在
echo '判断键是否存在<br />';
var_dump(array_key_exists('age',$arr));
echo '<br />';
var_dump(array_key_exists('age1',$arr));
echo '<br />';

//返回数组所有的键
echo '返回数组所有的键或值<br />';
//键
var_dump(array_keys($arr));
var_dump(array_keys($arr,'18'));//第二个参数，表示返回所有值为18(整数和字符串都会被匹配到)的键，加上第三个参数array_keys($arr,'18',true)为严格模式区分类型
echo '<br />';
//值
var_dump(array_values($arr)); 
//var_dump(array_values($arr,'age'));


echo '<hr />';
echo '一些数组操作函数<br />';
echo '弹出(删减)数组最后一个元素<br />';
$a1=[1,2,3,4,5,'6',7,'a'=>'aa','b'=>'bbb'];
var_dump($a1);
echo '<br />'; 
//array_pop 弹出元素
var_dump(array_pop($a1));
echo '<br />';
var_dump($a1);
//array_push 增加元素
echo '<br />';
array_push($a1,8,9,'10');//可以追加一个或者多个元素
print_r($a1);
echo '<br />';
//array_shift 弹出数组首个元素
var_dump(array_shift($a1));
print_r($a1);
echo '<br />';
array_unshift($a1,'aaa','aaa','7');//像数组首部添加N个元素
print_r($a1);
echo '<br />';

//去重，不区分整数和字符串，非引用传参，原始数组不会被改变
print_r(array_unique($a1));
echo '<br />';

//切割数组为一个二维数组，参数1-数组名  参数2--切割长度  参数3--是否保持原来的键,非引用传参，原始数组不会被改变
var_dump(array_chunk($a1,3,true));
echo '<br />';

//打乱数组，引用传参
//shuffle($a1);
//print_r($a1);
echo '<hr />';

//array_search 查找数组的值，返回键
$a2=[2,1,'3',5,6,'6',7,3,'a'=>'aaa','b'=>'ccc'];
$a3=[1,2,3,4,5,'a'=>'aaa','b'=>'ddd','c'=>'asd'];
var_dump(array_search(3,$a2));//init 2
echo '<hr />';
//array_merge 合并数组，有相同的字符串键名的，前一个值会被后一个值覆盖，整数键名则不会
var_dump(array_merge($a1,$a2));
echo '<hr />';
$merge23=array_merge($a2,$a3);
$merge231=array_merge($a2,$a3);
print_r($merge23);
echo '<br />';
//sort函数对数组进行排序，引用传参，直接改变数组，会重建索引
sort($merge23);
print_r($merge23);
//asort
echo '<br />';
asort($merge231);
print_r($merge231);
 
















	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

//var_dump(current($arr));


?>