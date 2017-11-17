<?php
$access_token = 'SHuI9jI94ZgsjRipHJB3oUkh3kbVBNbkQtEKXBPtxEkY7eY9hzU+TOIWHnW7rwHzWho/2mjToC0dnn1Mx3irTc4SFUSlnAC4WAitVPfkzfszr00vhkvQUMUI97dOVa7PmpXSPaAspkOBErvXDnLEIAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
