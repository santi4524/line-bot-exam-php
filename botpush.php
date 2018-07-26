<?php



require "vendor/autoload.php";

$access_token = 'CeM70uDxHLi88RmU2fViiPqbl7kZqbfzVrhdeqlEz3SBXTSG8i0qHf4DH0IEuhjE3yE92hqBogGh4TXnFlNKXzMpwi/wlKMixTQt/uohhmpJd79c6GiSDXhdHR/4c7OYfQ191kkJc3bLwU1IfduKVAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '7b2b1afd496c0559bcf40dc3e539304a';

$pushID = 'U5ee8e1b57abee308cf05512323e7bb5b';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







