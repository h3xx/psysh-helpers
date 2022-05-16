<?php

use Faker\{
    Factory,
    Generator,
};

function faker(): Generator {
    return Factory::create();
}
