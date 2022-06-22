<?php
use GuzzleHttp\Psr7\Uri;

if (class_exists(Uri::class)) {
    function uri($uri) {
        return new Uri($uri);
    }
}
