<?php declare(strict_types=1); // strict typing

    $request_method = $_SERVER['REQUEST_METHOD']; // GET, POST, PUT, DELETE...
    $request_uri = $_SERVER['REQUEST_URI']; // /example?foo=bar1&foo=bar2 => /example?foo=bar2

    function get_page_content() {
        return '';
    }

?>
