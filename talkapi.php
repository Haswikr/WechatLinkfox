<?php

        
         
$key = '2bb112aca95a4a5ea5b63c2851d7f366';
$info = $_GET['info'];
$userid = $_GET['uid'];
$url = "http://www.tuling123.com/openapi/api";
$data = array ( 'key' => $key, 'info' => $info,'userid' => $userid ); 
$data_string = json_encode($data);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS,$data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
);
 
$result = curl_exec($ch);
//echo $result;
$res_data = array ('code' => 0 );
$res_data = json_decode($result,true);
//print_r ($res_data);
$code = $res_data['code'];
$text = $res_data['text'];
//echo $code;
echo $text;
?>  