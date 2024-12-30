# b-3dev/create-http-request

`b-3dev/create-http-request` is a PHP package that allows you to easily send HTTP requests. It is designed to take input like URL, Payload, Headers, and Method to send HTTP requests and return the response.

## Features

- Send HTTP requests using different methods such as GET, POST, PUT, DELETE and PATCH.
- Supports sending Payload
- Supports sending custom Headers.

## Installation

You can install this package via Git.

### Installation with Git

you can clone the repository from GitHub and use it in your project:

1. Clone the repository:

```
git clone https://github.com/b-3dev/create-http-request.git
```

## Usage

After installation, you can easily use this package to send HTTP requests.

### Parameters:

- `url`: The destination URL to which the request is to be sent.
- `payload` (optional): The data to be sent with the request. This parameter is used for POST and PUT methods.
- `headers` (optional): The additional headers you need for the HTTP request.
- `method`: The HTTP method to use for sending the request. Valid values: `GET`, `POST`, `PUT`, `DELETE`, `PATCH`.

### Example PHP Code:

```php
require_once '../app/controllers/RequestController.php';

$controller = new RequestController();
$controller->sendRequest(
    url: 'https://req.wiki-api.ir/apis-1/ChatGPT',
    method: 'GET',
    payload: [
        'q' => 'hello'
    ],
    headers: [
        "Content-Type: application/json"
    ]
);
```

### Explanation of the Code:

1. `url`: The destination URL for the request.
2. `method`: The HTTP method (GET, POST, PUT, DELETE, PATCH).
3. `payload`: Data sent in the request (optional).
4. `headers`: Additional headers for the request (optional).
5. Output: The response received from the server after sending the request.

## Notes

- This package uses cURL to send requests, so cURL must be installed on your server.
- You can customize the headers and payload as needed for more advanced scenarios.

## Support

For support or to report issues, please create a new Issue on [GitHub](https://github.com/b-3dev/create-http-request).