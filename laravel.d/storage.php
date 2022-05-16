<?php

use Illuminate\Filesystem\FilesystemAdapter;
use Illuminate\Support\Facades\{
    Storage,
};

function s3(): FilesystemAdapter {
    return Storage::disk('s3');
}
