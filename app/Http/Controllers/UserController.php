<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\UserController as BaseController;

class UserController extends Controller
{
    //
    public function index(){
        return view('user');
    }
}
