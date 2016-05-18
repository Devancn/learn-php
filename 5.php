<?php

//接受get方法传递过来的"用户名"信息，并做数据库校验
echo "post:";
print_r($_POST);

//连接数据库、通过sql语句验证