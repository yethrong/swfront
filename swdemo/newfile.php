<?php
$sevre = new swoole_server('0.0.0.0', 9501);

$sevre->on('connect', function($serv,$fd){
    var_dump($serv);
    var_dump($fd);
    echo "已经连接\n";
});
$sevre->on('receive', function($serv,$fd,$from_id,$data){
    echo "接收到数据\n";
    var_dump($data);
});
$sevre->on('close', function($serv,$fd){
    echo "关闭连接\n";
});
$sevre->start();