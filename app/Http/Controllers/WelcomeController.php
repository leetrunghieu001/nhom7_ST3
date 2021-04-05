<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index($id)
    {
        return view($id);
    }

    public function admin()
    {
        return 'hi';
    }
}
