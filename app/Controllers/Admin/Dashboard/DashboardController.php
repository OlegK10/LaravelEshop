<?php

namespace App\Controllers\Admin\Dashboard;

use App\Http\Controllers\AdminController;
use App\Models\Admin\User;
use Illuminate\Contracts\View\View;

class DashboardController extends AdminController
{
    public function render(): View
    {
        $user = User::where('name', 'admin')->first()->email;
        debug($user);
        return $this->show('Dashboard.Dashboard');
    }
}
