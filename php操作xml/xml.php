<?php 
//复杂式的字符串
$xml=<<<xml
<?xml version="1.0" encoding="utf-8"?>
<bookstore>
	<book category="COOKING">
	  <title lang="en">Everyday Italian</title> 
	  <author>Giada De Laurentiis</author> 
	  <year>2005</year> 
	  <price>30.00</price> 
	</book>
	<book category="CHILDREN">
	  <title lang="en">Harry Potter</title> 
	  <author>J K. Rowling</author> 
	  <year>2005</year> 
	  <price>29.99</price> 
	</book>
	<book category="WEB">
	  <title lang="en">Learning XML</title> 
	  <author>Erik T. Ray</author> 
	  <year>2003</year> 
	  <price>39.95</price> 
	</book>
</bookstore>
xml;
//echo $xml;

//simpleXml

//创建一个SimpleXMLelement对象 传入xml字符串
$_example=new SimpleXMLElement($xml);
//asXML() 生成xml文件
$_example->asXML("example.xml");
//simplexml_load_file() 载入xml文件
if (file_exists('example.xml')) {
    $files = simplexml_load_file('example.xml');
 
    //print_r($files);
    //var_dump($files) ;
} else {
    exit('Failed to open test.xml.');
}

//获取xml中的值
foreach($files->book as $value){
	echo('['.$value->value.']') ;
}
?>