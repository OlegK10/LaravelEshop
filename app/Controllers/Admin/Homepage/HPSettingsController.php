<?php

namespace App\Controllers\Admin\Homepage;

use App\Enums\FlashMessagesEnum;
use App\Http\Controllers\AdminController;
use App\Objects\FlashMessageObject;
use Illuminate\Http\Request;

final class HPSettingsController extends AdminController
{
    public function index()
    {
        return $this->show('Homepage.HPSettings');
    }
}
