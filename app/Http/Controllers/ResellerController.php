<?php

namespace App\Http\Controllers;

use App\Models\TransationHistory;
use Illuminate\Http\Request;

class ResellerController extends Controller
{
    public function reseller()
    {
        return view('blade.reseller.reseller');
    }
    public function reseller_store(Request $request)
    {

        $data = $this->convert_string_to_data($request->code);
        //dd($data);
        $response = [];

        foreach ($data as $datas) {
            $response = $this->orderForm($datas[0], $datas[1], $datas[2]);
            // $response = $response;
            // dd($response);

            // $uid = is_object($response[0]) ? $response[0]->message : null;
            $message = $response[0]->message;
            $uid = isset($response[1]) ? $response[1] : null;
            $zid = isset($response[2]) ? $response[2] : null;
            $pid = isset($response[3]) ? $response[3] : null;



            // $uid = is_string($uid) ? $uid : null;
            // $zid = is_string($zid) ? $zid : null;
            // $pid = is_string($pid) ? $pid : null;


            TransationHistory::create([
                'message' => $message,
                'uid' => $uid,
                'zid' => $zid,
                'pid' => $pid,
            ]);

            $responses[] = $response;
            // dd($response);
        }

        return view('blade.reseller.reseller', compact('responses'));
    }

    public function convert_string_to_data($e)
    {

        $arr = explode('/', $e);
        //print_r($arr);

        $data1 = array();
        $uid = 0;
        $zid = 0;
        $pid = 0;
        foreach ($arr as $key => $value) {
            $uid = strtok($value, '(');

            $aa = strtok($value, ')');
            $dd = strpos($aa, "(");
            $zid = substr($aa, $dd + 1, 7);
            //$data1+=array($uid=>$zid);
            $x = strpos($value, ")");
            $pid = substr($value, ($x + 1), 5);

            $data1[$key] = array($uid, $zid, $pid);
        }
        return $data1;
        // print_r($data1);

        // echo "<br>" . count($data1);
    }


    public function orderForm($uid, $zid, $pid)
    {
        // dd($request->all());
        // dd($request->all());
        $userid = $uid;
        $zoneid = $zid;
        $email = "billionmore97@gmail.com";
        $product = "mobilelegends";
        $productid = $pid;
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
        //  dd($sign_arr);
        $url = 'https://www.smile.one/smilecoin/api/createorder';

        $res = $this->curlPost($url, $sign_arr);
        $res = json_decode($res);
        $data_return[0] = $res;
        $data_return[1] = $uid;
        $data_return[2] = $zid;
        $data_return[3] = $pid;

        // dd($res);
        return $data_return;
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

    public function resellerHistory($id)
    {

        // $transaction = TransationHistory::all();
        $transaction = TransationHistory::find($id);
        return view('blade.reseller.resellerHistory', compact('transaction'));
    }
}
