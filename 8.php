<?php
//设置 header头禁止浏览器缓存当前页面
//三个header头是给浏览器作兼容处理
//header头如果前面有什么输出 的话程序会报错
//header("Cache-Control:no-cache");
//header("Pragma:no-cache");
//header("Expires:-1");
$fp=fopen("./8.txt","a");//追加方式打开02.txt文件(文件不存在自动创建)
fwrite($fp,"java");//给文件写内容
fclose($fp);//关闭文件