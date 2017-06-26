<?php

// $access_token = 'w/CaCXolKorjagsQzBTgKYovOd4fiJrS9ez0Qh8rY0S8YVjIOnJBT1P1JmVXI5Bh+XAdN2sk521x7GaYlnAQi3+QUCaDmgzx+rlX5wRubhF1BtwOiiOsB4NyfwJ/FMyKsHoy6sB4E5wa059pme9rKwdB04t89/1O/w1cDnyilFU=';

// $dest_id = 'U698fe8988c9d3f1a997a3a7171580657';

// $access_token = 'w/CaCXolKorjagsQzBTgKYovOd4fiJrS9ez0Qh8rY0S8YVjIOnJBT1P1JmVXI5Bh+XAdN2sk521x7GaYlnAQi3+QUCaDmgzx+rlX5wRubhF1BtwOiiOsB4NyfwJ/FMyKsHoy6sB4E5wa059pme9rKwdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$data = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($data['access_token'])) {
    $access_token = $data['access_token'];
    $dest_id = $data['dest_id'];
    $messages = $data['messages'];

    // Make a POST Request to Messaging API to reply to sender
    $url = 'https://api.line.me/v2/bot/message/push';

    // $messages = [
    //     'type' => 'text',
    //     'text' => 'Hello ,world!' 
    // ];

    $data = [
        'to'=> $dest_id,
        'messages'=>[$messages]
    ];
    $post = json_encode($data);
    $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $result = curl_exec($ch);
    curl_close($ch);
    echo $result . "\r\n";
}

