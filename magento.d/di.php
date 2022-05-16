<?php

use Magento\Framework\App\{
    ObjectManager,
};

function di(...$args) {
    return om()->get(...$args);
}

function di_new(...$args) {
    return om()->create(...$args);
}

function om(): ObjectManager {
    return ObjectManager::getInstance();
}
