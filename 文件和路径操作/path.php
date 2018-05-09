<?php 
	/*$path='D:\wamp64\www\test\path.php';
	echo basename($path);//文件名
	echo "<br>";
	echo dirname($path);//目录名 extension 后缀名 filename 不带后缀的文件名
	echo "<br>";
	//print_r(pathinfo($path));//Array ( [dirname] => D:\wamp64\www\test [basename] => path.php [extension] => php [filename] => path )
	$array_path=pathinfo($path);
	echo $array_path['dirname'];
	echo $array_path['basename'];*/

	
	//创建目录
	//mkdir("library/haha",0777);
	

	//相对路径转换绝对路径
	/*$path='path.php';
	echo realpath($path);*/

	/*//filesize() 返回指定文件的大小
	$path='D:\wamp64\www\test\path.php';
	echo round(filesize($path)/1024,2).'kb';*/

	/*//disk_free_space 查看可用空间
	echo round(disk_free_space('c:')/1024/1024/1024,2).'gb';
	//disk_
	echo round(disk_total_space('c:')/1024/1024/1024,2).'gb';*/

	//设置时区
	//date_default_timezone_set('Asia/BeiJing');



	/*//fileatime() 最后的访问时间；
	$path='D:\wamp64\www\test\test.php';
	//格式化一个本地日期 并传入时间戳
	echo date('Y-m-d H:i:s',fileatime($path));
	echo "<br>";
	//所有者权限修改时间
	echo date('Y-m-d H:i:s',filectime($path));
	echo "<br>";
	//文件里的内容最后的修改时间
	echo date('Y-m-d H:i:s',filemtime($path));*/

	

 ?>