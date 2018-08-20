<?php
//遍历文件
echo '<pre>';
//$mdir = './a/b/';  
//要创建的目录
//$mk = mkdir($mdir,0755,true); 
//mkdir创建目录  第一个参数--要创建的目录，第二个参数---目录权限，第三个参数---包含子目录时必须为true


function dirlist($dir = './') {
	$opdir = opendir($dir);
	echo '<ul>';
	while ($filename = readdir($opdir)) {
		if ($filename != '.' && $filename != '..') {
			$newdir = $dir.'/'.$filename;
			if (is_dir($newdir) == false) {
				echo '<li>'.$filename.'</ li>';
			} else {
				echo '<li><font color="red">'.$newdir.'</font></li>';
				dirlist($newdir); //如果是文件夹 则调用函数自身
			}
		}
	}
	echo '</ul>';
	closedir($opdir);
}
dirlist('./');
			

//var_dump(scandir($mydir,true)); //直接以数组的形式打印出文件夹内容,第二个参数缺省，为true时  倒序输出
echo '<hr />';
var_dump(getcwd()); //getcwd 获取当前工作目录
chdir('./a/');//chdir 改变当前工作目录
var_dump(getcwd());
?>

-add-module=/root/headers-more-nginx-module-0.32 --add-module=/root/ngx_req_status-master