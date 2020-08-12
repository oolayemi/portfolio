<?php

namespace App\Http\Controllers;

use App\Birthday;
use Illuminate\Http\Request;

class BirthdayController extends Controller
{
    public function store(){
        $inputs = request()->validate([
            'name'=>'required',
            'message' => 'required'
        ]);

        $birthday = new Birthday($inputs);
        $birthday->save();

        session()->flash('message', 'Post was created');

        return redirect()->back();
    }
}
