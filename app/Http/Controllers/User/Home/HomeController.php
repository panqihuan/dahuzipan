<?php

namespace App\Http\Controllers\User\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index() {
        return view('user.home.index');
    }

}
