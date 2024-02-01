<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Interfaces\IAdminController;
use Illuminate\Contracts\View\View;

abstract class AdminController extends Controller implements IAdminController
{
    private const ADMIN_VIEW = 'admin';
    public function show(string $viewPath, array $data = []): View
    {
        return view(self::ADMIN_VIEW . '.' . $viewPath, $data);
    }
}
