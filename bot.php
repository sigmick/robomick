<?php
$access_token = 'w/CaCXolKorjagsQzBTgKYovOd4fiJrS9ez0Qh8rY0S8YVjIOnJBT1P1JmVXI5Bh+XAdN2sk521x7GaYlnAQi3+QUCaDmgzx+rlX5wRubhF1BtwOiiOsB4NyfwJ/FMyKsHoy6sB4E5wa059pme9rKwdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['message']['text'];
			// Get replyToken
			$replyToken = $event['replyToken'];

			// Build message to reply back


            if (strpos($text, 'มิค') !== false) {
                $r=rand(0,2);
                if($r==0){$replytext="คร้าบบบ";}
                if($r==1){$replytext="ว่าไงครับ";}
                if($r==2){$replytext="ครัช";}
            }

            if ((strpos($text, 'มิค') !== false) && (strpos($text, 'ครัช') !== false)) {
                $r=rand(0,2);
                if($r==0){$replytext="ครัชชช";}
                if($r==1){$replytext="ว่าไงครัช";}
                if($r==2){$replytext="อะไรครัช";}
            }

            if ((strpos($text, 'มิค') !== false) && (strpos($text, 'ไอ้') !== false)) {
                $r=rand(0,2);
                if($r==0){$replytext="ไรฟระ";}
                if($r==1){$replytext="เออ";}
                if($r==2){$replytext="เรียกใครฟะ";}
            }

            if (strpos(strtolower($text), 'mick') !== false) {
                $r=rand(0,2);
                if($r==0){$replytext="Hello";}
                if($r==1){$replytext="Hi";}
                if($r==2){$replytext="what's up";}
            }
            if ($text=='สาด' || strpos($text, 'สาดด') !== false) {
                $r=rand(0,5);
                if($r==0){$replytext="สาดดด";}
                if($r==1){$replytext="สาดดดดดดดดดดดด";}
                if($r==2){$replytext="สาดดดเอ้ยย";}
                if($r==3){$replytext="สาดดดด้วย";}
                if($r==4){$replytext="แสรดดดดด";}
                if($r==5){$replytext=$text;}
                
            }
			$messages = [
				'type' => 'text',
				'text' => $replytext
			];

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages],
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
	}
}
echo "OK";

?>