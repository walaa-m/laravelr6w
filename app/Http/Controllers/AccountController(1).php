<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        return 'Accounts Home';
    }

    public function admin()
    {
        return 'Admin Accounts';
    }

    public function user()
    {
        return 'User Accounts';
    }
}
