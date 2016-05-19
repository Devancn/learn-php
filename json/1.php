<?php
//在php里面生成json信息
//json_encode(数组/对象)
$color=array('red','blue','green');
var_dump(json_encode($color)); //字符串 "["red","blue","green"]"
//关联数组
$city=array('hebei'=>'shijiazhuang','shandong'=>'jinan','henan'=>'zhengzhou');
echo "<br>";
var_dump(json_encode($city));

//索引关联数组
$city1=array('hebei'=>'shijiazhuang','shandong'=>'jinan','henan'=>'zhengzhou','shanghai');
echo "<br>";
var_dump(json_encode($city1));

//多维数组，看当前维数的类型
//关联/索引关联维数----->json对象
//索引------------------>js数组

//对象生成 json 信息
class Pserson{
	public $name="tom";
	public $age=23;
	public function run(){
		echo "is running";
	}
}
$per=new Pserson();
echo "<br>";
var_dump(json_encode($per));
