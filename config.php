<?php

if (file_exists($autoload = __DIR__ . '/vendor/autoload.php')) {
    require_once($autoload);
}

require_once(__DIR__ . '/_include_dir.func.php');
_include_dir(__DIR__ . '/common.d');

// Build a config array for PsySH.
// If any of the files in ./*.d/*.php return an array, merge it into the config
// array.
$config = [];
$config_cb = function ($result) use (&$config) {
    if (is_array($result)) {
        $config = array_merge($config, $result);
    }
};

if (function_exists('app')) {
    // Laravel functions
    _include_dir(__DIR__ . '/laravel.d', $config_cb);
} else {
    _include_dir(__DIR__ . '/magento.d', $config_cb);
}

// Return PsySH config array
return $config;
