<?php
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
    $data = [
        'to'=> $dest_id,
        'messages'=> $messages
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

