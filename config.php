<?php

if (file_exists($autoload = __DIR__ . '/vendor/autoload.php')) {
    require_once($autoload);
}

require_once(__DIR__ . '/_include_dir.func.php');
_include_dir(__DIR__ . '/common.d');

if (function_exists('app')) {
    // Laravel functions
    _include_dir(__DIR__ . '/laravel.d');
} else {
    _include_dir(__DIR__ . '/magento.d');
}
