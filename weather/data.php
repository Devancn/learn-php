<?php
//php代理获得天气信息
//跨域请求
$url="http://www.weather.com.cn/data/sk/101010100.html";
//file_get_contents();//1)打开文件 2)向其它地址请求
$cont=file_get_contents($url);
echo $cont;