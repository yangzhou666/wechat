<?php
include_once "vendor/autoload.php";

use EasyWeChat\Factory;

$config = [
    'app_id' => 'wx3cf0f39249eb0xxx',
    'secret' => 'f1c242f4f28f735d4687abb469072xxx',
    'token' => 'TestToken',
    'response_type' => 'array',
    //...
];

$app = Factory::officialAccount($config);

$response = $app->server->serve();

// 将响应输出
$response->send();exit; // Laravel 里请使用：return $response;
