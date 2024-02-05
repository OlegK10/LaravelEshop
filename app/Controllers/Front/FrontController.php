<?php

namespace App\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class FrontController extends Controller
{
    private const FRONT_VIEW = 'front';
    public function show(string $viewPath, array $data = []): View
    {
        return view(self::FRONT_VIEW . '.' . $viewPath, $data);
    }
}
