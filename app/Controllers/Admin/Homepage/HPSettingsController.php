<?php

namespace App\Controllers\Admin\Homepage;

use App\Enums\FlashMessagesEnum;
use App\Http\Controllers\AdminController;
use App\Objects\FlashMessageObject;

final class HPSettingsController extends AdminController
{

    public function index()
    {
        $message = new FlashMessageObject();
        $message->title = 'Varování';
        $message->message = 'Nelze nahrát obrázek typu SVG';
        $message->formSubmitId = '0';
        $message->displayTime = 2300;
        $this->flash(FlashMessagesEnum::WARN_CONFIRM, $message);
        return $this->show('Homepage.HPSettings');
    }
}
