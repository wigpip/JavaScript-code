<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

class UserController extends Controller
{
    //
    public function profile() {

        if(Auth::check()) {



            $user = Auth::user()->email;

            return view('profile', compact('user'));

        } else {

            return back();

        }

    }
}
