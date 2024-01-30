<?php

namespace App\Http\Controllers;

use App\Models\TransationHistory;
use App\Models\Credit;
use App\Models\Zone;
use Illuminate\Http\Request;
use Session;
use Auth;
use DB;



class UserResellerController extends Controller
{
    // public function reseller()
    // {
    //     $credits = Credit::where('user_id', Auth::user()->id)->first();
    //     $balance = $credits->coin_balance;
    //     //dd($balance);
    //     return view('blade.reseller.user_reseller', compact('balance'));
    // }
    public function reseller()
    {
        $credits = Credit::where('user_id', Auth::user()->id)->first();
        // Check if $credits is not null before accessing its properties
        if ($credits) {
            $balance = $credits->coin_balance;
            return view('blade.reseller.user_reseller', compact('balance'));
        } else {
            // Handle the case where no matching records were found
            // You can redirect, display an error message, or handle it based on your requirements
            return view('blade.reseller.user_reseller');
        }
    }
    public function reseller_store(Request $request)
    {

        // dd($request->all());
        $login_userid = Auth::user()->id;
        $client_zoneid = [];
        $client_zoneid_associate_name = [];
        // $data = $this->convert_string_to_data($request->code);
        //  $data = $this->convert_string_to_data2($request->code);
        $data = $this->convert_string_to_data3($request->code);
        // dd($data);
        // $credits = Credit::where('user_id', Auth::user()->id)->first();
        // $balance = $credits->coin_balance;


        foreach ($data as $key => $pval) {

            $prduct_name = $pval[2];
            $product_id = Zone::where('product_name', $prduct_name)->first('product_id');       //    dd($product_id);
            if (is_null($product_id)) {
                dd("product id is null");
            }
            $client_zoneid[$key] = $product_id->product_id;
        }


        //dd('asdfasdfasdfasdfasdfasd');
        $response = [];
        $coin_order = 0;
        $coin_cost = 0;
        $zone_area = 0;
        foreach ($data as $key => $datas) {
            //*************************balance check start here */

            $pid = $client_zoneid[$key];


            $coin_balance = Credit::where('user_id', $login_userid)->first(); //get coin balance from login user account
            $get_zoneid = $this->getrole($datas[0], $datas[1], $pid);
            $zone_area = $get_zoneid[0]->zone;
            // dd(gettype($get_zoneid[0]->zone));
            $aa = array($get_zoneid[0]);
            $bb = $aa[0];
            $cc = (array)$bb;
            // echo gettype($cc);
            //dd(count($cc)); //get zone id of reload uid
            $zone = Zone::where('product_id', $pid)->first();
            // dd($zone->brazil);
            $bra = $zone->brazil;
            // dd($zone->indo);
            $arr_count = count($cc);

            if (!empty($zone)) {
                if ($zone_area < 1) $coin_cost = $bra;
                else {
                    if ($get_zoneid[0]->change_price > 1.25) $coin_cost = $zone->indo;
                    else $coin_cost = $zone->global;
                }
            } else {
                Session::put('zoneid_error', "product id at zone does not exit");

                return view('blade.reseller.user_reseller', compact('balance'));
            }
            $data[$key]['coin_balance'] = $coin_balance->coin_balance;
            $data[$key]['coin_cost'] = $coin_cost;
            $data[$key]['pid'] = $pid;
        }
        $total_coin_order = 0;
        foreach ($data as $digit) {

            if (isset($digit[3])) {
                $total_coin_order += ($digit['coin_cost'] * $digit[3]);
            } else {
                $total_coin_order += ($digit['coin_cost']);
            }
        }
        //dd($total_coin_order);
        if ($data[0]['coin_balance'] < $total_coin_order) {
            dd("you have insufficient balance");
        }

        $super = $this->product_time($data);


        $newBalance = 0;
        $bblance = 0;
        $tran_success = 0;
        foreach ($super as $key => $vvalue) {
            if ($key < 1) {
                $bblance = (int)$vvalue[3];
            } else {
                $bblance -= (int)$vvalue[4];
            }


            if ($bblance >= $vvalue[4]) {
                $newBalance = $vvalue[3] - $vvalue[4]; //array $vvalue[3] is balance and 4 is current order value
                $vvalue[3] = $vvalue[3] - $vvalue[4];
                echo $vvalue[3];
                // $bb = Credit::find($coin_balance->id);
                $bb = Credit::where('user_id', $login_userid)->first(); // dd($newBalance);
                $bb->coin_balance = $newBalance;
                $bb->save();
                // dd($newBalance);
                // $response[$key][0] = (object)['message' => 'Success from sse']; //this should be deffer base on smile.one server response
                $response[$key][0] = 'Success from sse tomandtom';
                $response[$key][1] = $vvalue[0];  //user id
                $response[$key][2] = $vvalue[1];  //zone id
                //  $response[$key][3] = $datas[2];  //product id //old before zone table exit
                $response[$key][3] = $vvalue[5];  //product id
                $tran_success++;
            } else {

                // $response[$key][0] = (object)['message' => 'Insufficient balance from sse'];
                $response[$key][0] = 'Insufficient balance from sse';
                $response[$key][1] = $vvalue[0];
                $response[$key][2] = $vvalue[1];
                //  $response[$key][3] = $datas[2];  //product id //old before zone table exit
                $response[$key][3] = $vvalue[5];  //product id
                //  dd($response);
                // Session::flash('message', 'Insufficient balance '); // what difference session::flash and session::put
                break;
            }

            // $uid = is_object($response[0]) ? $response[0]->message : null;
            $message = $response[$key][0];
            $uid = isset($response[$key][1]) ? $response[$key][1] : null;
            $zid = isset($response[$key][2]) ? $response[$key][2] : null;
            $pidd = isset($response[$key][3]) ? $response[$key][3] : null;



            // $uid = is_string($uid) ? $uid : null;
            // $zid = is_string($zid) ? $zid : null;
            // $pid = is_string($pid) ? $pid : null;


            TransationHistory::create([
                'message' => $message,
                'uid' => $uid,
                'zid' => $zid,
                'pid' => $pidd,
                'coin_amount' => $coin_order,
                'coin_balance' => $newBalance,
            ]);
        }


        // dd($response);
        $response = array_unique($response, SORT_REGULAR);

        $success = "Transaction has success for " . $tran_success . " times";
        $total_cost = "This order cost you  " . $total_coin_order . " coins";

        $this->session_message($response, $success, $total_cost);

        return view('blade.reseller.user_reseller');
    }


    function product_time($data3)
    {

        //print_r($data3);
        $count = 0;
        $final_data = [];
        foreach ($data3 as $key => $data) {

            $arr_count = count($data);
            if ($arr_count > 6) {

                $string = $data[0] . "," . $data[1] . "," . $data[2] . "," . $data['coin_balance'] . "," . $data['coin_cost'] . "," . $data['pid'];
                $newdata = [];
                for ($i = 0; $i < $data[3]; $i++) {
                    $newdata[$i] = $string;
                }

                foreach ($newdata as $key => $vv) {
                    $tt = explode(',', $vv);
                    $final_data[$count] = $tt;
                    $count++;
                }
            } else {
                //$final_data[($count)]=$data;
                $string = $data[0] . "," . $data[1] . "," . $data[2] . "," . $data['coin_balance'] . "," . $data['coin_cost'] . "," . $data['pid'];
                $newdata = [];

                $tt = explode(',', $string);
                $final_data[$count] = $tt;
                $count++;

                $count++;
            }
        }

        return $final_data;
    }
    public function convert_string_to_data3($e)
    {
        $arr = explode(',', $e);
        //print_r($arr);

        $data3 = array();
        $final_data = [];
        $cot = 0;
        foreach ($arr as $key => $c) {

            $uid = strtok($c, '(');
            $aa = strtok($c, ')');
            $dd = strpos($aa, "(");
            $zid = substr($aa, $dd + 1, 7);

            if (strpos($c, "*") !== false) {

                $z = strtok($c, '*'); //cut before *
                $x = strpos($z, ")"); //number of character before )
                $pid = substr($z, ($x + 1), 5); //cut until ) from the beginning get product id

                $y = strpos($c, "*"); //number of character before *
                $ptime = substr($c, ($y + 1), 5); ////cut until * from the beginning get product time (how many time prodicut id watnt to reload)

                $data3[$cot] = array($uid, $zid, $pid, $ptime);
            } else {
                $xx = strpos($c, ")");  //number of character before )
                $pid = substr($c, ($xx + 1), 5); //cut until ) from the beginning get product id
                $final_data[$cot] = array($uid, $zid, $pid);
                $data3[$cot] = array($uid, $zid, $pid);
            }
            $cot++;
        }
        return $data3;
    }


    public function orderForm($uid, $zid, $pid)
    {

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

        $url = 'https://www.smile.one/smilecoin/api/createorder';

        $res = $this->curlPost($url, $sign_arr);
        $res = json_decode($res);
        $data_return[0] = $res;
        $data_return[1] = $uid;
        $data_return[2] = $zid;
        $data_return[3] = $pid;

        return $data_return;
    }

    public function getrole($uid, $zid, $pid)
    {

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

        $url = 'https://www.smile.one/smilecoin/api/getrole';

        $res = $this->curlPost($url, $sign_arr);
        $res = json_decode($res);
        //dd("working this shit".$res);
        $data_return[0] = $res;
        $data_return[1] = $uid;
        $data_return[2] = $zid;
        $data_return[3] = $pid;

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
        $transactions = TransationHistory::where('user_id', $id)->get();
        return view('blade.reseller.user_resellerHistory', compact('transactions'));
    }

    public function session_message($response, $success_times = 0, $cost)
    {
        foreach ($response as $key => $val) {
            $response[$key] = implode(' ', $val);
        }
        $arr_res = $response;
        $sec = implode(',', $arr_res);
        $sec = $sec . "," . $success_times . "," . $cost;
        if (Session::has('val')) {
            $old_val = Session::get('val');
            $sec = $sec . "/" . $old_val;
            Session::put('val', $sec);
        } else  Session::put('val', $sec);
    }

    public function session_clear($respon)
    {

        if (Session::has('val')) {

            Session::forget('val', $respon);
        }

        return $this->reseller();
    }
}
