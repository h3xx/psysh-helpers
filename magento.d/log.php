<?php

use Psr\Log\LoggerInterface;

function logger(): LoggerInterface {
    return di(LoggerInterface::class);
}
