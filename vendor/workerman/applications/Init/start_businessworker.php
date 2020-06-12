<?php
// 自动加载类
require_once __DIR__ . '/../../../autoload.php';
use \Workerman\Worker;
use \GatewayWorker\BusinessWorker;

// bussinessWorker 进程
$worker = new BusinessWorker();
// worker名称
$worker->name = 'ChatBusinessWorker';
// bussinessWorker进程数量
$worker->count = 4;
// 服务注册地址
$worker->registerAddress = '127.0.0.1:1237';
// $worker->registerAddress = '10.0.2.219:1237';
$worker->eventHandler = '\applications\App\Events';
// 如果不是在根目录启动，则运行runAll方法
if(!defined('GLOBAL_START'))
{
    Worker::runAll();
}

