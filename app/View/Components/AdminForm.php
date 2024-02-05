<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class AdminForm extends Component
{
    public $route;
    public $lang;
    public function __construct(string $route, string $lang = 'cz')
    {
        $this->route = $route;
        $this->lang = $lang;
    }

    public function render(): View|Closure|string
    {
        return view('Admin.Form.EditForm');
    }
}
