<?php
$access_token = '+8h4N62YdV0CDHhG+hDMBFK/5G6MuyVjKqxawx1nWQM2QKy1jiEcGte+5LgI/Hj1z7rkzEtpmrfLVbQV6cOpj9HGVWYW5YbKGoxp59FtOkFBHmuRjKygcWzqJDoLtcgBB9n+cQG6WJ0ur23yNPI9bAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;