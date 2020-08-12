<?php

namespace App\Http\Controllers;

use App\Birthday;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('admin.home');
    }
    public function form(){
        return view('form');
    }
    public function table(){
        $birthdays = Birthday::all();

        return view('admin.table', ['birthdays'=>$birthdays]);
    }


}
