<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{

    public function __construct()
    {
       // $this->middleware('auth');
    }
     public function index()
    {
       return view('admin.home.index');
    }
    public function user()
    {
        return view('admin.user.index');
    }



}
