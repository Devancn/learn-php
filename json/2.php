<?php
//解析、反编码json信息
$city=array('hebei'=>'shijiazhuang','shandong'=>'jinan','henan'=>'zhengzhou');
$jn_city=json_encode($city);
//反编码
//$fan_city=json_decode($jn_city);
//var_dump($fan_city);//object(stdClass)#1 (3) { ["hebei"]=> string(12) "shijiazhuang" ["shandong"]=> string(5) "jinan" ["henan"]=> string(9) "zhengzhou" }
//
$fan_city1=json_decode($jn_city,true);//以数组形式反编码
var_dump($fan_city1);

//给一个自定义的json字符串反编码操作
//反编码的json字符串对定义有单双引号有要求
//$jn_str="{name:'kitty',color:'gray',age:5}";//null
//$jn_str="{'name':'kitty','color':'gray','age':'5'}";//NULL
$jn_str='{"name":"kitty","color":"gray","age":"5"}';
$fan_str=json_decode($jn_str,true);
var_dump($fan_str);