<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dashboard() //gatting started
    {
        return view('admin.dashboard');
    }
    public function profile()
    {
        return view('admin.profile');
    }
    public function sign_in()
    {
        return view('admin.sign_in');
    }
    public function sign_up()
    {
        return view('admin.sign_up');
    }
   
    public function reset_password()
    {
        return view('admin.reset_password');
    }
    public function chat()
    {
        return view('admin.chat');
    }
    public function index()
    {
        return view('admin.index');
    }
   
    
}
