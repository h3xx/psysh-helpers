<?php

use Magento\Framework\App\ProductMetadataInterface;

require_once('di.php');

function version(): string {
    return di(ProductMetadataInterface::class)->getVersion();
}

function ver(): string {
    return version();
}
