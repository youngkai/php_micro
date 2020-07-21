<?php

include "./vendor/autoload.php";

use channel\channels;

use Go\Micro\Service\Star\Request;

$channle = new channels();

$client = $channle->myService();

$request = new Request();

$request->setName("lee");

$res = $client->Call($request)->wait();

/**
 * @var $response \Go\Micro\Service\Star\Response
 */
$response = $res[0];

$msg = $response->getMsg();

var_dump($msg);