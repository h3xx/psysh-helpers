<?php

require_once(__DIR__ . '/vendor/autoload.php');

function _include_dir(string $dir): void {
    if (is_dir($dir)) {
        foreach (glob("$dir/*.php") as $inc) {
            require_once($inc);
        }
    }
}

_include_dir(__DIR__ . '/common.d');

if (function_exists('app')) {
    // Laravel functions
    _include_dir(__DIR__ . '/laravel.d');
} else {
    _include_dir(__DIR__ . '/magento.d');
}
