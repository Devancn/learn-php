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
$sql3="select goods_name,goods_price,goods_number,goods_weight from sw_goods ".$page_obj->limit;
$qry3=mysql_query($sql3);
//5)获得页码列表
$pagelist=$page_obj->fpage(array(3,4,5,6,7,8));
echo <<<eof
	<style type="text/css">
		table{
			width:700px;
			margin:0 auto;
			border:1px solid black;
			border-collapse:collapse;
		}
		td{
		border:1px solid black;
		}
	</style>
	<table>
		<tr><td>序号</td><td>名称</td><td>价格</td><td>数量</td><td>重量</td></tr>
eof;

$p=isset($_GET['page'])?$_GET['page']:1;
$num=($p-1)*$per;
while($rst3=mysql_fetch_assoc($qry3)){
	echo "<tr>";
	echo "<td>".$num++."</td>";
	echo "<td>".$rst3['goods_name']."</td>";
	echo "<td>".$rst3['goods_price']."</td>";
	echo "<td>".$rst3['goods_number']."</td>";
	echo "<td>".$rst3['goods_weight']."</td>";
	echo "</tr>";
}
echo "<tr><td colspan='5'>$pagelist</td></tr>";
echo "</table>";