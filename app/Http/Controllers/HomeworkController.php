<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeworkController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function registerView()
    {
        return view('pages/homework_register_view');
    }
}
