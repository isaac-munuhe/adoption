<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Child;
use App\Adoptee;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        return view('admin.dashboard')
            ->with('children_count', Child::all()->count())
            ->with('adoptees_count', Adoptee::all()->count());
    }
    public function upload(){
        return view('admin.upload');
    }
    public function request(){
        return view('admin.request');
    }
}
