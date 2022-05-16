<?php

use Magento\Framework\App\{
    ObjectManager,
};

function di(...$args) {
    return ObjectManager::getInstance()->create(...$args);
}
