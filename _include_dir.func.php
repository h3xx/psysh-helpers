<?php

function _include_dir(string $dir): void {
    if (is_dir($dir)) {
        foreach (glob("$dir/*.php") as $inc) {
            require_once($inc);
        }
    }
}
