<?php
header("Content-type:text/html;charset=utf-8");
//获得最新的聊天内容
$link=mysql_connect('localhost','root','123') or exit(mysql_error());
mysql_select_db('shop0609',$link);
mysql_query('set names utf8');

//接收表单信息并存储
//print_r($_POST);
$msg=$_POST['msg'];
$color=$_POST['color'];
$biaoqing=$_POST['biaoqing'];
$receiver=$_POST['receiver'];

$sql="insert into message values(null,'$msg','admin','$receiver','$color','$biaoqing',now())";
if(mysql_query($sql)){
	echo "发表留言成功";
}else{
	echo "发表留言失败";
}