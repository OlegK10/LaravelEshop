<?php

namespace App\Http\Controllers\Interfaces;

use Illuminate\Contracts\View\View;

interface IAdminController 
{
    public function show(string $viewPath, array $data): View;
}
