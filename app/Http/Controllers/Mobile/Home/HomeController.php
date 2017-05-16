<?php

namespace App\Http\Controllers\Mobile\Home;

use App\Model\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request) {
//        $fp = popen('df -lh | grep -E "^(/)"',"r");
//        $rs = fread($fp,1024);
//        pclose($fp);
//        $rs = preg_replace("/\s{2,}/",' ',$rs);  //把多个空格换成 “_”
//        $hd = explode(" ",$rs);
//        dd($hd);
//        $hd_avail = trim($hd[3],'G'); //磁盘可用空间大小 单位G
//        $hd_usage = trim($hd[4],'%'); //挂载点 百分比
//        print_r($hd);
//        exit;
        //        $homeBannerList =
        return view('m.home.index');
    }

    public function getLogin(Request $request) {
        return view('m.user.login');
    }

    /**
     * 用户登录提交
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postLogin(Request $request)
    {
        //  创建验证信息数组
        $message = [
            'cellphone' => $request->input('cellphone'),
            'password' => $request->input('password')
        ];

        //  验证登录信息
        if(Auth::attempt($message, $request->input('rememberme'))){
            //  成功登录, 跳转至上个登录访问页面, 如果不存在, 则跳转至 "我的"
            return redirect()->intended('user');
        }

        //  跳转至上个页面, 即登录页面
        return redirect()->back();
    }
}
