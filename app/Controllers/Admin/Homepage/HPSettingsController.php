<?php

namespace App\Controllers\Admin\Homepage;

use App\Http\Controllers\AdminController;

final class HPSettingsController extends AdminController
{
    public function index()
    {
        return $this->show('Homepage.HPSettings');
    }
}
