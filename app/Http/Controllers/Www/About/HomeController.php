<?php

namespace App\Http\Controllers\Www\About;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(Request $request) {
        if($request->pjax()){
            return 'about';
        }else{
            return redirect()->to('/#!/contact');
        }
    }
}
