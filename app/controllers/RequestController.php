<?php

require_once '../app/models/RequestModel.php';

class RequestController {
    public function sendRequest(string $url, string $method = 'GET', array $payload = [], array $headers = [], ) {
        $model = new RequestModel();

        $response = $model->sendCurlRequest($url, $method, $headers, $payload);

        require_once '../app/views/responseView.php';
        new ResponseView($response);
    }
}

?>
