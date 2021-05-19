<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /* Show tổng quan */
    public function index()
    {
        return view('user.index');
    }
}
