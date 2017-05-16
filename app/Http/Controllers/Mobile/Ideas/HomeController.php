<?php

namespace App\Http\Controllers\Mobile\Ideas;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
        return view('m.ideas.index');
    }
}
