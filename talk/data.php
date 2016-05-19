<?php
header("Content-type:text/html;charset=utf-8");
//获得最新的聊天内容
$link=mysql_connect('localhost','root','123') or exit(mysql_error());
mysql_select_db('shop0609',$link);
mysql_query('set names utf8');
//每次都请求新的聊天内容
$sql="select * from message";
$qry=mysql_query($sql);
$info=array();
while($rst=mysql_fetch_assoc($qry)){
	$info[]=$rst;
}
echo json_encode($info);
//通过json格式提供给客户端