<?php
echo '<pre>';
$file='./test.txt';  //相对路径
$file1='C:\Users\Public\Desktop\text.txt'; //绝对路径
$file2='http://127.0.0.1/file/test1.txt';//URL远程地址 不支持以写的方式打开,只能打开已经存在的文件
$fop = fopen($file,'ab');
if ($fop == false) {
	echo '打开文件失败';
} else {
	$str = md5(time());
	echo ($str),'<br />';
	$wf = fwrite($fop,$str,4);//fwrite 写入，默认写在文件最前，第一个参数--打开的文件，第二个参数--要写入的字符串，第三个参数---要写入的字节长度（缺省则全部写入）
	var_dump($wf);
	echo '<br />';

}
fclose($fop);

echo '<hr / >';
$file3 = './test1.txt';
$fop = fopen($file3,'rb');
while (feof($fop) == false ) {
	$rf = fread($fop,1);
	echo ($rf).'<br />';
}
var_dump(file_exists($file));
echo '<br />';
var_dump(is_file($file));
echo '<hr />';
unlink('./1.txt');//unlink 删除文件，文件不存在则会报错，一般会在前面加上一个判断是否是一个正常存在的文件再进行删除
/** $rf = fread($fop,1);//每读一次,指针便往后移，已字节为单位,读完后无内容返回空值
echo ($rf).'<br />';
$rf = fread($fop,1);
echo ($rf).'<br />';
$rf = fread($fop,1);
echo ($rf).'<br />';
var_dump(feof($fop)); //判断文件是否读完  feof
echo '<br />';
$rf = fread($fop,1);
echo ($rf).'<br />';
var_dump(feof($fop)); //判断文件是否读完  feof
$rf = fread($fop,1);
echo ($rf).'<br />';
var_dump(feof($fop)); //判断文件是否读完  feof
**/





?>