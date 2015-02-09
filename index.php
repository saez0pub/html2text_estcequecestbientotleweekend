<?php


$url="http://estcequecestbientotleweekend.fr/";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
$data = curl_exec($ch);
curl_close($ch);
$data=preg_replace('/<script[^<]*<\/script>/s','',$data);
$data=preg_replace('/<style.*<\/style>/s','',$data);
$data=preg_replace('/<p id=\'footer\'>.*<\/body>/s','</body>',$data);
print_r($data);

?>
