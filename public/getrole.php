<?php

$uid = "1972364";

$email = "billionmore97@gmail.com";

$product = "mobilelegends";
$productid = "13";
$userid = "799187531";
$zoneid = "12193";

$time = time();



$sign_arr = array(

    'email' => $email,
    'uid' => $uid,
    'userid' => $userid,
    'zoneid' => $zoneid,
    'product' => $product,
    'productid' => $productid,
    'time' => $time,

);

$m_key = "b69f5758549ec089966e726a21c8c1d7";

$sign_arr['sign'] = sign($sign_arr, $m_key);



$url = 'https://www.smile.one/smilecoin/api/getrole';

$re = curl_post($url, $sign_arr);

echo $sign_arr['sign'] . "<br>";

var_dump($re);





function sign($sign_arr = array(), $m_key)
{

    ksort($sign_arr);

    $str = '';

    foreach ($sign_arr as $k => $v) {

        $str .= $k . '=' . $v . '&';
    }

    $str = $str . $m_key;

    return md5(md5($str));
}





function curl_post($url, $params, $header = array())

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
