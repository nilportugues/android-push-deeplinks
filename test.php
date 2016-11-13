<?php

define("FCM_API_KEY", "AIzaSyCiygUH5aEiVqTgllMU9v3f08DUO2jcCFE");

function sendNotification ($tokens, $message)
{
    $url = 'https://fcm.googleapis.com/fcm/send';
    
    $fields = array('registration_ids' => $tokens, 'data' => $message);
    $headers = array('Authorization:key = '.FCM_API_KEY, 'Content-Type: application/json');
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
    $result = curl_exec($ch);
    
    if ($result === FALSE) {
        die('Curl failed: ' . curl_error($ch));
    }
    curl_close($ch);
    
    return $result;
};

$tokens = ["your-device-token"];

//depends on your implementation
$push = array("message" => " FCM PUSH NOTIFICATION TEST MESSAGE");
$message_status = sendNotification($tokens, $push);

echo $message_status;
