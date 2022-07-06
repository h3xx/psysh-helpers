<?php

function _include_dir(string $dir, ?Closure $callback = null) {
    if (is_dir($dir)) {
        foreach (glob("$dir/*.php") as $inc) {
            $result = require_once($inc);
            if (!is_null($callback)) {
                $callback($result, $inc, $dir);
            }
        }
    }
}
