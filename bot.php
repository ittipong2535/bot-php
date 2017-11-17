<?php
 
$strAccessToken = "SHuI9jI94ZgsjRipHJB3oUkh3kbVBNbkQtEKXBPtxEkY7eY9hzU+TOIWHnW7rwHzWho/2mjToC0dnn1Mx3irTc4SFUSlnAC4WAitVPfkzfszr00vhkvQUMUI97dOVa7PmpXSPaAspkOBErvXDnLEIAdB04t89/1O/w1cDnyilFU=";
 
$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
 
$strUrl = "https://api.line.me/v2/bot/message/reply";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
 
if($arrJson['events'][0]['message']['text'] == "สวัสดี"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดี ID คุณคือ ".$arrJson['events'][0]['source']['userId'];
}else if($arrJson['events'][0]['message']['text'] == "ชื่ออะไร"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ฉันยังไม่มีชื่อนะ";
}else if($arrJson['events'][0]['message']['text'] == "ทำอะไรได้บ้าง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ฉันทำอะไรไม่ได้เลย คุณต้องสอนฉันอีกเยอะ";
}else{
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ฉันไม่เข้าใจคำสั่ง";
}
 
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$strUrl);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close ($ch);

$strAccessToken = "SHuI9jI94ZgsjRipHJB3oUkh3kbVBNbkQtEKXBPtxEkY7eY9hzU+TOIWHnW7rwHzWho/2mjToC0dnn1Mx3irTc4SFUSlnAC4WAitVPfkzfszr00vhkvQUMUI97dOVa7PmpXSPaAspkOBErvXDnLEIAdB04t89/1O/w1cDnyilFU=";
 
$strUrl = "https://api.line.me/v2/bot/message/push";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
 
$arrPostData = array();
$arrPostData['to'] = "Ua0ed93023aec653d3d200a441e07f6d6";
$arrPostData['messages'][0]['type'] = "text";
$arrPostData['img_url'][0]['img_url'] = "https://cdn.shopify.com/s/files/1/0379/7669/products/sampleset2_1024x1024.JPG?v=1458740363";
 
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$strUrl);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close ($ch);

?>
