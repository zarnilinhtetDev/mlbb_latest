<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserLoginController extends Controller
{
    public function index()
    {
        return view('blade.main.user_page');
    }
}
