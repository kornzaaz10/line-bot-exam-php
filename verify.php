<?php
$access_token = 'FE+CLdBTuNluI/QANL93WgHGdOZca4365tHws29scdRnURdNOan0nbr0jlCMNHpDNLhM+yqJfGNfFNmw/Lvhity7gBevds7ggM5DFyIZggl0GtxxW2SDOHsLJ5xMacBkIqmxh59nidTzm62x4sKFNgdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
