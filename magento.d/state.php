<?php

use Magento\Framework\App\{
    State,
};

function state(): State {
    return di(State::class);
}
