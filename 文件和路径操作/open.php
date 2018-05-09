<?php 
	//文件
	/*//打开文件 fopen(); 接受两个参数:文件名,文件模式
	//w:只写模式   如果文件已经有了，则删除文件里的内容,没有,则自行创建
	//fopen('test.txt','w');
	
	//fopen返回资源类型的resource，也称为句柄
	$fp=fopen('test.txt','w');
	//向文件里写入
	$into="something";
	//fwrite()
	fwrite($fp,$into,strlen($into));
	//直接写入
	fwrite($fp,"something");
	//关闭文件
	fclose($fp);


	//file_put_contents() 不需要关闭
	file_put_contents('file.txt','111');*/


	//a 追加
	/*$fp=fopen('test.txt','a');
	$into="<strong>something</strong>\n";
	fwrite($fp,$into,strlen($into));
	//fgetc();//读出一个字符 指针向前移动
	fclose($fp);
	*/



	/*
	//r 读取文件
	$fopen=fopen('test.txt','r');

	//fgetc() 接受一个参数:事件句柄,读出一个字符 指针向前移动
	echo fgetc($fopen);
	echo "<br>";


	//fgets() 读出一行 第二个参数(可选)：返回length-1个字节的字符
	echo fgets($fopen,5);


	//fgetss() 接受一个事件句柄,会忽略html标签
	echo fgetss($fopen);


	//fread() 读取文件 两个必选参数：事件句柄  长度
	echo fread($fopen,5);


	//fpassthru(); 接受一个事件句柄,读出剩余的字符串,并且具有输出功能 返回剩余字符串的长度
	echo fgetc($fopen);
	echo "<br>";
	//fpassthru($fopen);
	echo fpassthru($fopen);//打印出剩余字符串的长度
	fclose($fopen);

	//file  将整个文件按每行读入到一个数组中 下标为0;
	//$file_array=file('test.txt');
	//echo $file_array[8];
	

	//readfile() 读出一个文件并写入到输出缓冲中,具有输出功能 返回文件字节的总长度;
	//echo readfile('test.txt');
	
	
	//file_get_contents();将整个文件读入到缓冲区中，没有输出功能；返回文件里的内容；
	//echo file_get_contents('test.txt');
	

	feof() 检测文件指针是否到达结尾;
	$fopen=fopen('test.txt','r');
	while(!feof($fopen)){
		echo fgetc($fopen);
	}*/

	//file_exists() 检测文件或目录是否存在
	
	//filesize() 文本大小 单位:字节;
	//echo filesize('test.txt');
	
	//unlink() 删除一个文件
	
	/*//rewind() 接受一个事件句柄,将文件指针复位到文件开头
	rewind($fopen);*/


	/*//ftell() 接受一个事件句柄,返回文件指针的位置;
	ftell($fopen);*/


	/*//fseek() 定位文件指针
	fseek($fopen,20);*/






	//目录
	/*//opendir() 打开目录
	$dir=opendir('D:\wamp64\www\test');
		//使用循环遍历目录
		while(!!$rdir=readdir($dir)){
			echo $rdir."<br>";
		}
	//关闭目录
	closedir($dir);*/

	//scandir() 列出指定目录的文件或目录 返回一个数组
	//print_r(scandir('D:\wamp64\www\test'));
	

	//rmdir() 删除指定目录
	
	//rename() 重命名
	
 ?>