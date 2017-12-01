<?php
	$Datalist=array();
	$row1=array();
	$con =@mysql_connect("localhost","root","123456")or die("连接服务器失败!程序中断执行!");
	//设置编码，防止中文乱码
	mysql_query("set names 'utf8'");
	mysql_select_db("browseroptions", $con)or die("连接当前数据库失败!程序中断执行!");
	$result = mysql_query("select pwd from user where name='".$_POST["name"]."'");
	//获取post参数名
	//$keys=array_keys($_POST);
	$row = mysql_fetch_assoc($result);
	if($row){
		if($row["pwd"]==$_POST["pwd"]){
			echo '1';
		}else{
			echo '0';
		}
	}else{
		echo '0';
	}
	$close=@mysql_close($con);
	if(!$close){
		exit("关闭MySql服务器连接失败!程序中断执行!");
	}
	
?>