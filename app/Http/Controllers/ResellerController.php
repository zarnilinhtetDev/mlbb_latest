<?php

namespace App\Http\Controllers;

use App\Models\TransationHistory;
use App\Models\Credit;
use Illuminate\Http\Request;
use Session;


class ResellerController extends Controller
{
    public function reseller()
    {
        return view('blade.reseller.reseller');
    }
    public function reseller_store(Request $request)
    {
        $p_coin_13 = 80;
        $coin_balance = 100;

        $data = $this->convert_string_to_data($request->code);



        // dd($data[0][2]);
        $response = [];
        $responses = [];
        $coin_order = 0;
        foreach ($data as $datas) {
            //*************************balance check start here */

            $pid = $datas[2];
            //below if condition statement will be replace with db data (we are goin to have the db with different coin for different zone)
            if ($pid = 13) $p_coin = 80;
            else if ($pid = 23) $p_coin = 160;
            $coin_order += $p_coin;
            //get user id from user table . user auth->userid and get user id
            $userid = 1;
            $coin_balance = Credit::where('user_id', $userid)->first();
            //dd($coin_balance);
            //here will be the process or function to check the coin amount
            //from the product id from database
            // $p_coin = 80;
            // $coin_order+= $p_coin; //hard code to be replace from db data
            //here will be checked and compare from user main coin  balance
            //if less then $p_coin_pid fial and retrun with messaage insuffician coin



            // compare $coin_order wtih coin balace from credit table
            // if $coin_order is less than coinbalance call the orderForm fucntion else break the loop and return message insufficient balace
            if ($coin_balance->coin_balance <= $coin_order)
                // $response = $this->orderForm($datas[0], $datas[1], $datas[2]);
                dd("die here");
            else {

                $response[0] = (object)['message' => 'Insufficient balance from sse'];
                $response[1] = $datas[1];
                $response[2] = $datas[2];
                //  dd($response);
                Session::flash('message', 'Insufficient balance ');
                break;
            }
            // $response = $response;
            // dd($response . "what the fuck");

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


            // dd($response);
        }

        $responses[] = $response;
        //dd($responses);
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
