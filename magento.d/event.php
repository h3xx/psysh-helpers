<?php

use Magento\Framework\Event\{
    ConfigInterface as EventConfigInterface,
    ManagerInterface as EventManagerInterface,
};

function dispatch(...$args) {
    return em()->dispatch(...$args);
}

function em(): EventManagerInterface {
    return di(EventManagerInterface::class);
}

function ec(): EventConfigInterface {
    return di(EventConfigInterface::class);
}

function event(...$args) {
    return dispatch(...$args);
}
