<?php
include_once "vendor/autoload.php";

use EasyWeChat\Factory;

$config = [
    'app_id' => 'wx784e51f7a8c8d4c7',
    'secret' => '3a1213284ce9b0b49c89e1b7cfaa8bb7',
    'token' => 'TestToken',
    'response_type' => 'array',
    //...
];

$app = Factory::officialAccount($config);

$app->server->push(function ($message) {
    return "您好！测试消息!";
});

$response = $app->server->serve();

// 将响应输出
$response->send();exit; // Laravel 里请使用：return $response;
