<?php

require_once '../app/controllers/RequestController.php';

$controller = new RequestController();
$controller->sendRequest(
    url: 'https://req.wiki-api.ir/apis-1/ChatGPT',
    method: 'GET',
    payload: [
        'q' => 'hello'
    ],
    headers: [
        "Accept: application/json"
    ]
);
