<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Interfaces\IAdminController;
use Illuminate\Contracts\View\View;

abstract class AdminController extends Controller implements IAdminController
{
    public function show(string $viewPath): View 
    {
        return view('admin.'.$viewPath);
    }
}
