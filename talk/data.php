<?php
header("Content-type:text/html;charset=utf-8");
//获得最新的聊天内容
$link=mysql_connect('localhost','root','123') or exit(mysql_error());
mysql_select_db('shop0609',$link);
mysql_query('set names utf8');

$maxID=$_GET['maxID'];
//每次都请求新的聊天内容
//本次请求的记录结果id需要大于上次已经获得的记录的最大id
$sql="select * from message WHERE id >'$maxID'";
$qry=mysql_query($sql);
$info=array();
while($rst=mysql_fetch_assoc($qry)){
	$info[]=$rst;
}
echo json_encode($info);
//通过json格式提供给客户端