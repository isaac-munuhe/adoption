<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Child;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('admin.dashboard');
    }
    public function upload(){
        return view('admin.upload');
    }
    public function request(){
        return view('admin.request');
    }
}
