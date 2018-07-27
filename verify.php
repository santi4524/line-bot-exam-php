<?php
$access_token = 'CeM70uDxHLi88RmU2fViiPqbl7kZqbfzVrhdeqlEz3SBXTSG8i0qHf4DH0IEuhjE3yE92hqBogGh4TXnFlNKXzMpwi/wlKMixTQt/uohhmpJd79c6GiSDXhdHR/4c7OYfQ191kkJc3bLwU1IfduKVAdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
