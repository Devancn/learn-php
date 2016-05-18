<?php
$fp=fopen("./2.txt","a");//追加方式打开02.txt文件(文件不存在自动创建)
fwrite($fp,"php0609");//给文件写内容
fclose($fp);//关闭文件