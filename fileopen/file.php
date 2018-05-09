<?php 
	//$_FILES接收文件 接收的文件会保存在临时文件中 $_FILES['userfile']['tmp_name'] 返回一个二维数组
	//print_r($_FILES);
	/*Array
	(
	    [userfile] => Array
	        (
	            [name] => 文件名
	            [type] => 文件类型
	            [tmp_name] => 文件临时存放的路径
	            [error] => 错误类型：0没有错误,1文件大小超过约定值  upload_max_filesize=2M
	            			2文件大小超过html表单设置的文件大小,3文件只上传部分,4没有文件上传
	            [size] => 
	        )

	)*/
	
	//限制上传格式 
	//使用if语句
	/*if($_FILES['userfile']['type']!='image/png'){
		echo "<script>alert('只允许上传png图片');history.back();</script>";
		exit;
	}*/
	//使用switch限制上传类型
	/*switch($_FILES['userfile']['type']){
		case 'image/png':
		break;
		case 'image/jpg':
		break;
		case 'image/gif':
		break;
		case 'video/mp4':
		break;
		default:echo "<script>alert('只允许上传png,jpg,gif类型的图片和MP4类型的视频');history.back();</script>"; 

	}*/
	




	//上传失败
	if($_FILES['userfile']['error']>0){
		switch($_FILES['userfile']['error']){
			case 1:echo "<script>alert('上传文件大小超过约定值');history.back();</script>";
			break;
			case 2:echo "<script>alert('文件大小超过html中表单设置的文件大小');history.back();</script>";
			break;
			case 3:echo "<script>alert('文件只上传了部分');history.back();</script>";
			break;
			case 4:echo "<script>alert('没有上传任何文件');history.back();</script>";
		}
		exit;
	}
	//使用数组限制上传类型
	$fileMimes=array('image/jpg','image/gif','image/png','video/mp4');
	if(is_array($fileMimes)){
		if(!in_array($_FILES['userfile']['type'],$fileMimes)){
			echo "<script>alert('只允许上传png,jpg,gif类型的图片和MP4类型的视频');history.back();</script>"; 
			exit;
		}
	}
 	/*// You should also check filesize here. 
    if ($_FILES['upfile']['size'] > 1000000) {
        throw new RuntimeException('Exceeded filesize limit.');
    }*/
    define('URL',dirname(__FILE__).'/uploads');
    if(!is_dir(URL)){
    	mkdir(URL,0777);//接收两个参数:路径名和最大权限 默认为0777;
    }
	//is_uploaded_file() 判断文件是否是通过http post 方式上传的; 返回一个布尔值
	if(is_uploaded_file($_FILES['userfile']['tmp_name'])){
		//第一个参数:临时文件的地址,第二个参数:移动的目标位置 返回一个布尔值
		if(!move_uploaded_file($_FILES['userfile']['tmp_name'],URL.'/'. $_FILES['userfile']['name'])){
		//move_uploaded_file($_FILES['userfile']['tmp_name'], 'images/'.$_FILES['userfile']['name']);//还可以指定文件夹
		echo "<script>alert('移动失败');history.back();</script>";		
		exit;
	}
	}else{
		echo "<script>alert('临时文件中找不到上传文件');history.back();</script>";
		exit;
	}
	//在本页面中显示图片
	/*echo "<script>alert('文件上传成功');</script>";

	echo '<img src="'.$_FILES['userfile']['name'].'">';*/

	//将图片在另一个页面中显示
	echo "<script>alert('文件上传成功');location.href='show.php?url=".$_FILES['userfile']['name']."';</script>";
 ?>