<?php
header("Content-type:text/html;charset=utf-8");
//制作传统分布效果、连接数据库、获得数据、分布显示
$link=mysql_connect('localhost','root','123');
mysql_select_db('shop0609',$link);
mysql_query('set names utf8');

$sql="select * from sw_goods";
$qry=mysql_query($sql);
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

$num=0;
while($rst=mysql_fetch_assoc($qry)){
	echo "<tr>";
	echo "<td>".$num++."</td>";
	echo "<td>".$rst['goods_name']."</td>";
	echo "<td>".$rst['goods_price']."</td>";
	echo "<td>".$rst['goods_number']."</td>";
	echo "<td>".$rst['goods_weight']."</td>";
	echo "</tr>";
}
echo "</table>";