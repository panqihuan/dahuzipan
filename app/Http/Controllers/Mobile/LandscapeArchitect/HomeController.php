<?php

namespace App\Http\Controllers\Mobile\LandscapeArchitect;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
        return view('m.landscape_architect.index');
    }

    public function show($id) {
        return view('m.landscape_architect.show');
    }
}
