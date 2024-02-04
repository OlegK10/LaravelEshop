<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class AdminForm extends Component
{
    public $route;
    public function __construct($route)
    {
        $this->route = $route;
    }

}
