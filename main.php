<?php

$url = 'https://api.oxapay.com/merchants/request';

$data = array(
    'merchant' => 'BN39G1-AMDB09-5HKUR2-PU1FYG',
    'amount' => 100,
    'currency' => 'TRX',
    'lifeTime' => 30,
    'feePaidByPayer' => 0,
    'underPaidCover' => 2.5,
    'callbackUrl' => '',
    'returnUrl' => '',
    'description' => 'Order #12345',
    'orderId' => '1',
    'email' => 'veviglow@gmail.com'
);

$options = array(
    'http' => array(
        'header' => 'Content-Type: application/json',
        'method'  => 'POST',
        'content' => json_encode($data),
    ),
);

$context  = stream_context_create($options);
$response = file_get_contents($url, false, $context);
$result = json_decode($response);
var_dump($result);
?>