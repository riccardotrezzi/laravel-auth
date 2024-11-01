<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function dashboard()
    {
        return view('admin.dashboard');
    }
    
    public function projects()
    {
        return view('admin.projects.index');
    }

}
