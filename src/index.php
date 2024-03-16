<?php declare(strict_types=1); // strict typing

    $request_method = $_SERVER['REQUEST_METHOD']; // GET, POST, PUT, DELETE...
    $request_uri = $_SERVER['REQUEST_URI']; // /example?foo=bar1&foo=bar2 => /example?foo=bar2
    $request_is_https = isset($_SERVER['HTTPS'] && $_SERVER['HTTPS'] !== 'off'); // false

    $parsed_uri = parse_url($request_uri, PHP_URL_PATH); // /example
    $parsed_uri_parameters = explode('?', $request_uri);

    $parsed_uri_parameters = empty($parsed_uri_parameters) ? $parsed_uri_parameters : $parsed_uri_parameters[1];

    function get_page_content() {
        return '';
    }

?>
