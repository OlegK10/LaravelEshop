<?php

namespace App\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class FrontController extends Controller
{
    public function show(string $viewPath, array $data = []): View
    {
        return view($viewPath, $data);
    }
}
