<?php

namespace App\Http\Controllers\User\User;

use App\Model\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{

    /**
     * 用户登录
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request) {
        //  查询手机号和登录令牌是否存在
        $user = User::where([
            'cellphone' => $request->cellphone,
            'remember_token' => $request->_token
        ])->first();

        //  如果用户不存在, 返回用户不存在数据
        if(!$user){
            return response()->jsonp(
                $request->get('login'),
                [
                    'code' => 500,
                    'msg' => '用户不存在'
                ]
            );
        }

        //  如果密码匹配错误, 返回错误数据
        if(!Hash::check($request->password, $user->password)){
            return response()->jsonp(
                $request->get('login'),
                [
                    'code' => 500,
                    'msg' => '用户名或密码错误'
                ]
            );
        }

        //  登录用户
        Auth::login($user);

        //  返回登录成功数据
        return response()->jsonp(
            $request->get('login'),
            [
                'code' => 0
            ]
        );
    }

    /**
     * 判断用户是否登录
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function checkLogin(Request $request) {
        if($request->input('checkLogin') && Auth::check()){
            return response()->jsonp($request->get('checkLogin'), ['isLogin' => true]);
        }else{
            return response()->jsonp($request->get('checkLogin'), ['isLogin' => false]);
        }
    }

    /**
     * 退出当前登录用户
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout() {

        //  登录用户退出
        Auth::logout();

        //  跳转至首页, (未登录, 后续继续跳转到env('HOME_URL') . '/#!/login', 首页登录页面)
        return redirect()->to('/');
    }
}
