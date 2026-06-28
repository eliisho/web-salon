<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $user = session()->get('user');
        return view('homepage', ['user' => $user]);
    }
}
