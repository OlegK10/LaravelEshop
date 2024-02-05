<?php

namespace App\Controllers\Front\Homepage;

use App\Controllers\Front\FrontController;
use Illuminate\Support\Facades\Auth;

final class HomepageController extends FrontController
{
    public function index()
    {
        $credentials = ['name' => 'admin', 'password' => 'admin'];
        Auth::attempt($credentials);
        return $this->show('homepage.homepage');
    }
}
