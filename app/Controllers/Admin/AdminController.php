<?php

namespace App\Controllers;

use App\Enums\FlashMessagesEnum;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Interfaces\IAdminController;
use App\Objects\FlashMessageObject;
use Illuminate\Contracts\View\View;

abstract class AdminController extends Controller implements IAdminController
{
    private const ADMIN_VIEW = 'admin';
    public function show(string $viewPath, array $data = []): View
    {
        return view(self::ADMIN_VIEW . '.' . $viewPath, $data);
    }

    public function flash(FlashMessagesEnum $type, FlashMessageObject $message): void
    {
        session()->flash($type->value, $message);
    }
}
