<?php

namespace App\Http\Controllers\Www\Index;

use App\Model\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index(Request $request) {
        return view('www.index.index');
    }

    public function getLogin(Request $request) {
        if($request->pjax()){
            return view('www.user.login');
        }else{
            return redirect()->to('/#!/contact');
        }
    }

    public function postLogin(Request $request) {

        $user = User::where('cellphone', $request->cellphone)->first();
        if(!$user){
            return response()->json([
                'code' => 400,
                'msg' => '用户不存在'
            ]);
        }
        if(!Auth::attempt(['cellphone' => $request->cellphone, 'password' => $request->password])){
            return response()->json([
                'code' => 400,
                'msg' => '用户名或密码不正确'
            ]);
        }
        Auth::user()->remember_token = csrf_token();
        Auth::user()->save();
        return response()->json([
            'code' => 0
        ]);
    }

    public function getReset(Request $request) {
        if($request->pjax()){
            return view('www.user.reset');
        }else{
            return redirect()->to('/#!/contact');
        }
    }
}
