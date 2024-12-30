<?php

class ResponseView {
    public function __construct($response) {
        echo "<h1>Response:</h1>";
        echo "<pre>$response</pre>";
    }
}
