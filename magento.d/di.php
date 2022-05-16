<?php

use Magento\Framework\App\{
    ObjectManager,
};

function di(...$args) {
    return om()->create(...$args);
}

function om(): ObjectManager {
    return ObjectManager::getInstance();
}
