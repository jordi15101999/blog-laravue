<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Http\Middleware\Authenticate;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
}