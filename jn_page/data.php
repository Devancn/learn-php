<?php
header("Content-type:text/html;charset=utf-8");
//制作传统分布效果、连接数据库、获得数据、分布显示
$link=mysql_connect('localhost','root','123');
mysql_select_db('shop0609',$link);
mysql_query('set names utf8');
//实现数据分页
//1)引入分页类
$a=include ('./Page.class.php');
//2)获得总记录条数
$sql="select * from sw_goods";
$qry=mysql_query($sql);
$total=mysql_num_rows($qry);
$per=7;
//3)实例化分页类对象
$page_obj=new Page($total,$per);
//4)制作sql语句，获得每页信息
//$page_obj->limit:分页类会根据当前的页码把 "limit 偏移量，长度 "给制作好
$sql3="select goods_name as n,goods_price as p,goods_number as u,goods_weight as w from sw_goods ".$page_obj->limit;//sql语句里面的as 可以不用加
$qry3=mysql_query($sql3);
//5)获得页码列表
$pagelist=$page_obj->fpage(array(3,4,5,6,7,8));
$p=isset($_GET['page'])?$_GET['page']:1;
$num=($p-1)*$per;
$info=array();
while($rst3=mysql_fetch_assoc($qry3)){
	//$res3代表每条记录的一维数组信息
	//要把全部的$rst3整合到一起，变为一个二维数组
	$rst3['x']=++$num;
	$info[]=$rst3;
}
$info[]=$pagelist;
echo json_encode($info);
//需要把全部的信息整合一下
//json_encode()只能使用一次

