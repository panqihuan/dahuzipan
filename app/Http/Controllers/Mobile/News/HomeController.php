<?php

namespace App\Http\Controllers\Mobile\News;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(Request $request) {
        dd($request->route()->getName());
    }

    public function show(Request $request, $id) {
        return view('m.news.show', [

        ]);
    }
}
