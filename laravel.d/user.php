<?php

use App\Models\User;

function user() {
    return User::query()->first();
}
