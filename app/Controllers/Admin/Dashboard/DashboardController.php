<?php

namespace App\Controllers\Admin\Dashboard;

use App\Http\Controllers\AdminController;
use Illuminate\Contracts\View\View;

class DashboardController extends AdminController
{
    public function render(): View
    {
        return $this->show('Dashboard.Dashboard');
    }
}
