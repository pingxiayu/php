<?php 
	//php创建图像
	//步骤:1.设置标头,告诉浏览器要生成的mime类型
	//	   2.创建一个图像区域,所有操作都基于这个图像区域
	//	   3.在空白图像区域绘制填充背景
	//	   4.在背景上绘制图形轮廓输入文本
	//	   5.输出最终图形
	//	   6.清除所有资源
	//	   7.其他页面调用图像
	/*header("content-type:image/png");
	//imagecreatetruecolor() 新建一个真彩图像 接收两个参数:height width 返回一个图像资源句柄
	$im=imagecreatetruecolor(400,400);
	//imagecolorallocate() 为一幅图像分配颜色
	$color=imagecolorallocate($im,0,102,255);
	$textcolor=imagecolorallocate($im,255,225,255);
	imagefill($im,0,0,$color);
	imageline($im,0,0,400,400,$textcolor);
	imageline($im,0,400,400,0,$textcolor);
	imageantialias($im, true);
	imagestring($im,5,152,190,"hello world!",$textcolor);
	imagepng($im);
	imagedestroy($im); */


	//简单的验证码
	/*$nmsg="";
	for($i=0;$i<4;$i++){
		//将十进制转换为十六进制 mt_rand() 取随机数
		@$nmsg .=dechex(mt_rand(0,15));
	}
	header("content-type:image/png");
	$im=imagecreatetruecolor(75,25);
	$color=imagecolorallocate($im,0,201,255);
	imagefill($im,0,0,$color);
	$textcolor=imagecolorallocate($im,255,255,255);
	imagestring($im,5,20,5,$nmsg,$textcolor);
	imagepng($im);
	imagedestroy($im);*/



	//添加水印
	/*	header("Content-Type:image/png");
		$path=dirname(__FILE__)."\\";
		$im=imagecreatefromjpeg($path."my.jpg");
		$textcolor=imagecolorallocate($im,255,255,255);
		imagestring($im,5,20,20,"尼玛",$textcolor);
		imagepng($im);
		imagedestroy($im);*/
		



	?>