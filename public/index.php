<?php
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$request_uri = str_replace('/public', '', $request_uri);

if (strpos($request_uri, '/api/') === 0 || strpos($request_uri, '/backend/') === 0) {
    $file = dirname(dirname(__FILE__)) . $request_uri;
    if (file_exists($file) && is_file($file)) {
        require $file;
    } else {
        http_response_code(404);
        echo json_encode(['status' => 'error', 'message' => 'Endpoint not found']);
    }
} else {
    $request_uri = rtrim($request_uri, '/') ?: '/index.html';
    if (pathinfo($request_uri, PATHINFO_EXTENSION) === '') {
        $request_uri .= '.html';
    }

    $file = dirname(dirname(__FILE__)) . '/frontend' . $request_uri;
    if (file_exists($file) && is_file($file)) {
        require $file;
    } else {
        http_response_code(404);
        echo 'Page not found';
    }
}
?>
