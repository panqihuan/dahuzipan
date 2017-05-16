<?php

namespace App\Http\Controllers\Www;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PayController extends Controller
{
    private $priKey = '-----BEGIN RSA PRIVATE KEY-----
MIICXQIBAAKBgQDHBc3Cyv/31uYmbAX6nG9E+fe0JadDF6DPOVLoHm36kD/gvLsO
YE6iyvOV/9xCK23AP33jhSFTnQYV3kmL2t5yOqcf/1wnmMHHeHZxi+I69/lHcPTb
Kp1WAEvlDG84d3KDqJo3NW3cRhqn3pF5HY1Qaz5dqJO0QvqZQpFOdaRj9wIDAQAB
AoGBALbtebM6PM1DA6V7En/He2pNy0QUe8lqFU+Co9Zf6bwtC9l3/wJ2uLBelEdh
tcRIAId8lCwkeH5OzIIbH0RhtqRul9HfPhzmzI96dDW5YN3M28jVzigo5JUdvcXx
GenAiuLWVZV4RLSgERUftU4eJcR9db3kXrrtyFf2+zKL9HWxAkEA5DJtk91HSVCq
qDCUq6pZTVWUn0QI+BzUccWdvv+Hj9HkZMy/csLLlAe4Bf+gNu51hBxGjR8pGRpG
vGIVLhS2vwJBAN9FakG1+sMOz8jQ0Ow1fPIRpgDSaHSvuw97vGVMy7/VRbOzPQcY
RC36/xux2pYNQo+KywVr1ZbsOjNiJMCBGMkCQQCeGEHKW1dz96sD8wRNGivcZBof
bSc5nd+hIuPy212zyhqNqzxH6aTY3bAkl8ELzZElAeHvC1ORzJ6NDPbXggpJAkAP
ewCjDbsVSzGc+t2BgzPmlNKtu+kCLi0KJcoqO+jkpCTxELxqgYQ4q+6EPRCq1sCG
s1jgR1nH3Rkr9uIVdt4BAkB542+ss2n2Bp3bTrKeoM8jScfLaWE4u9BQU5Yurqkw
fjygOXH9Tl2tkCxw+hPy03BIS1avAwr8ACZH/CaGDAYi
-----END RSA PRIVATE KEY-----';

    public function privateKey($key) {
        $this->priKey = $key;


        $newPriKey = '-----BEGIN RSA PRIVATE KEY-----
';
        for($i=0; $i<(mb_strlen($this->priKey))/64; $i++){
            $newPriKey .= mb_substr($this->priKey, $i*64, 64) . '
';
        }

        $newPriKey .= '-----END RSA PRIVATE KEY-----';
        $this->priKey = $newPriKey;
    }
    public function index(Request $request) {
                $old = $this->priKey;
                $this->privateKey(env('DEMO_RSA_PRIVATE_KEY'));
                echo $old . '<br/><br/>' . $this->priKey;
        dd($old, $this->priKey);
        exit;
        return view('pay_index');
    }
    public function pay(Request $request) {
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        if (strpos($user_agent, 'MicroMessenger') === false) {
            return redirect()->to('alipay_pay');
        }
        return view('pay')->with('callBackUrl', '/pay_index');
    }

    public function alipayPay(Request $request) {
        $this->privateKey(env('DEMO_RSA_PRIVATE_KEY'));
        $url = env('APP_URL');

        $content =[
            'out_trade_no' => date('Ymd').rand(00000000,99999999),
            'total_amount' => '0.01',
            'body' => '测试微信公众号支付',
            'subject' => 'test alipay pay'
        ];
        $stringToBeSigned = $this->getSignContent($content);

        $res = openssl_get_privatekey($this->priKey);
        openssl_sign($stringToBeSigned, $sign, $res);
        openssl_free_key($res);
        $sign = base64_encode($sign);


        $array = [
            'method' => 'haimafu.submerchant.alipay.trade.precreate',
            'app_id' => env('DEMO_APP_ID'),
            'sign' => $sign,
            'content' => json_encode($content)
        ];

        //        return redirect($url . '/pay_index');

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url . "/payment/gateway",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($array),
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/json",
                "postman-token: 15d61e30-6f30-fe64-ee42-cd924ff5d532"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            dd($response);
            $response = json_decode($response, true);
            //            $h5_pay_url = $url . '/payment/h5_wx/?prepay_id=' . $response['data']['prepay_id']. '&callback_url=' . $url . '/pay_index';
            $h5_pay_url = $response['data']['qrCode'];
            dd($response);
            return redirect($h5_pay_url);
        }
    }

    public function wxPay(Request $request) {
        $this->privateKey(env('DEMO_RSA_PRIVATE_KEY'));
        $url = env('APP_URL');


        if(!isset($_GET['openid'])){
            $callback = $url . '/wx_pay?'.http_build_query($request->all());
            $getOpenIdUrl = $url . '/payment/get-openid?callback=' . urlencode($callback);
            return redirect($getOpenIdUrl);
        }

        $content =[
            'body' => '测试微信公众号支付',
            'out_trade_no' => date('Ymd').rand(00000000,99999999),
            'total_fee' => '0.01',
            'sub_openid' => $_GET['openid'],
            'spbill_create_ip' => $request->getClientIp(),
            'sub_appid' => '',
            'goods_tag' => 'goods_tag'
        ];
        $stringToBeSigned = $this->getSignContent($content);


        $res = openssl_get_privatekey($this->priKey);
        openssl_sign($stringToBeSigned, $sign, $res);
        openssl_free_key($res);
        $sign = base64_encode($sign);


        $array = [
            'method' => 'haimafu.wxpay.mppay',
            'app_id' => env('DEMO_APP_ID'),
            'sign' => $sign,
            'content' => json_encode($content)
        ];

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url . "/payment/gateway",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($array),
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/json",
                "postman-token: 15d61e30-6f30-fe64-ee42-cd924ff5d532"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            $response = json_decode($response, true);
            $h5_pay_url = $url . '/payment/h5_wx/?prepay_id=' . $response['data']['prepay_id']. '&callback_url=' . $url . '/pay_index';
            return redirect($h5_pay_url);
        }
    }

    function checkEmpty($value) {
        if (!isset($value))
            return true;
        if ($value === null)
            return true;
        if (trim($value) === "")
            return true;

        return false;
    }
    function characet($data, $targetCharset) {


        if (!empty($data)) {
            $fileType = "UTF-8";
            if (strcasecmp($fileType, $targetCharset) != 0) {

                $data = mb_convert_encoding($data, $targetCharset);
            }
        }


        return $data;
    }
    function getSignContent($params) {
        ksort($params);

        $stringToBeSigned = "";
        $i = 0;
        foreach ($params as $k => $v) {
            if (false === $this->checkEmpty($v) && "@" != substr($v, 0, 1)) {

                // 转换成目标字符集
                $v = $this->characet($v, "UTF-8");

                if ($i == 0) {
                    $stringToBeSigned .= "$k" . "=" . "$v";
                } else {
                    $stringToBeSigned .= "&" . "$k" . "=" . "$v";
                }
                $i++;
            }
        }

        unset ($k, $v);
        return $stringToBeSigned;
    }
}
