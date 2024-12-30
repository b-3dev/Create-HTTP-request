<?php

class RequestModel {
    public function sendCurlRequest($url, $method = 'GET', $headers = [], $payload = null) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        
        switch (strtoupper($method)) {
            case 'POST':
                curl_setopt($ch, CURLOPT_POST, true);
                if ($payload) {
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
                }
                break;

            case 'PUT':
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
                if ($payload) {
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
                }
                break;

            case 'DELETE':
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
                if ($payload) {
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
                }
                break;

            case 'PATCH':
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PATCH');
                if ($payload) {
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
                }
                break;

            default:
                curl_setopt($ch, CURLOPT_HTTPGET, true);
                if ($payload) {
                    $url = $url . '?' . http_build_query($payload);
                    curl_setopt($ch, CURLOPT_URL, $url);
                }
                break;
        }

        if (!empty($headers)) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }

        $response = curl_exec($ch);

        if(curl_errno($ch)) {
            return 'cURL error: ' . curl_error($ch);
        }

        curl_close($ch);
        return $response;
    }
}
