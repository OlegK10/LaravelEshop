<?php

use Illuminate\Support\Facades\Request;

if (!function_exists('isAdmin')) { // global
    function isAdmin(): bool  // global
    {
        return auth() && Request::is('admin/*');
    }
}
