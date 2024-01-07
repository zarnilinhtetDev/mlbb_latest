<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PurchaseController extends Controller
{
    public function showForm()
    {
        return view('your.view.form'); // Replace 'your.view.form' with the actual view file path
    }

    public function submitForm(Request $request)
    {
        // dd($request->all());
        $userid = $request->user_id;
        $zoneid = $request->zone_id;
        $email = "billionmore97@gmail.com";
        $product = "mobilelegends";
        $productid = "13";
        $uid = "1972364";
        $time = time();

        $sign_arr = [
            'email' => $email,
            'uid' => $uid,
            'userid' => $userid,
            'zoneid' => $zoneid,
            'product' => $product,
            'productid' => $productid,
            'time' => $time,
        ];

        $m_key = "b69f5758549ec089966e726a21c8c1d7";

        $sign_arr['sign'] = $this->sign($sign_arr, $m_key);
        //dd($sign_arr);
        $url = 'https://www.smile.one/smilecoin/api/getrole';

        $response = $this->curlPost($url, $sign_arr);
        $response = json_decode($response);

        // dd($response);
        return view('dashboard', compact('response', 'userid', 'zoneid'));
    }

    public function orderForm(Request $request)
    {
        // dd($request->all());
        // dd($request->all());
        $userid = $request->userid;
        $zoneid = $request->zoneid;
        $email = "billionmore97@gmail.com";
        $product = "mobilelegends";
        $productid = $request->productid;
        $uid = "1972364";
        $time = time();

        $sign_arr = [
            'email' => $email,
            'uid' => $uid,
            'userid' => $userid,
            'zoneid' => $zoneid,
            'product' => $product,
            'productid' => $productid,
            'time' => $time,
        ];

        $m_key = "b69f5758549ec089966e726a21c8c1d7";

        $sign_arr['sign'] = $this->sign($sign_arr, $m_key);
        //dd($sign_arr);
        $url = 'https://www.smile.one/smilecoin/api/createorder';

        $response = $this->curlPost($url, $sign_arr);
        $response = json_decode($response);

        dd($response);
        return view('dashboard', compact('response', 'userid', 'zoneid'));
    }




    private function sign($sign_arr = [], $m_key)
    {
        ksort($sign_arr);

        $str = '';

        foreach ($sign_arr as $k => $v) {
            $str .= $k . '=' . $v . '&';
        }

        $str = $str . $m_key;

        return md5(md5($str));
    }

    private function curlPost($url, $params, $header = [])
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_POST, 1);

        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_TIMEOUT, 5);

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

        if ($header) {

            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        }

        curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.2; Win64; x64) Presto/2.12.388 Version/12.15');

        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));

        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($ch);

        curl_close($ch);

        return $result;
    }
}
