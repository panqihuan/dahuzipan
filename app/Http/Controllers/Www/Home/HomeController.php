<?php

namespace App\Http\Controllers\Www\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(Request $request) {
        if($request->pjax()){
            return view('www.home.index');
        }else{
            return redirect()->to('/#!/contact');
        }
    }
}
