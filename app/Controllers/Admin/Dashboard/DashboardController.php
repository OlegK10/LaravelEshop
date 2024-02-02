<?php

namespace App\Controllers\Admin\Dashboard;

use App\Http\Controllers\AdminController;
use App\Models\Admin\User;
use Illuminate\Contracts\View\View;

class DashboardController extends AdminController
{
    public function index(): View
    {
        $user = User::query()->where('name', 'admin')->first();
        
        debug($user);
        return $this->show('Dashboard.Dashboard');
    }
}
