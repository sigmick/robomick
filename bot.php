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

            $uid=$event['source']['userId'];
            $user=getUser($uid);
            $displayname=$user['displayName'];

			// Build message to reply back


            if ((strpos($text, 'มิค') !== false) && strlen($text<12)) {
                $r=rand(0,2);
                if($r==0){$replytext="คร้าบบบ";}
                if($r==1){$replytext="ว่าไงครับ ".$displayname;}
                if($r==2){$replytext="ครัช";}
            }

            if ((strpos($text, 'สิกขวัต') !== false) && strlen($text<15)) {
                $r=rand(0,2);
                if($r==0){$replytext="คร้าบบบ";}
                if($r==1){$replytext="ว่าไงครับ";}
                if($r==2){$replytext="ครัช";}
            }

            if ((strpos($text, 'มิค') !== false) && (strpos($text, 'ครัช') !== false)) {
                $r=rand(0,2);
                if($r==0){$replytext="ครัชชช";}
                if($r==1){$replytext="ว่าไงครัช";}
                if($r==2){$replytext="อะไรครัช ".$displayname;}
            }

            if ((strpos($text, 'มิค') !== false) && (strpos($text, 'ไอ้') !== false)) {
                $r=rand(0,2);
                if($r==0){$replytext="ไรฟระ";}
                if($r==1){$replytext="เออ";}
                if($r==2){$replytext="เรียกใครฟะ";}
            }

            if ((strpos(strtolower($text), 'mick') !== false) && strlen($text<12)) {
                $r=rand(0,2);
                if($r==0){$replytext="Hello";}
                if($r==1){$replytext="Hi ".$displayname;}
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

            if (strpos($text, '555') !== false) {
                $r=rand(0,7);
                if($r==0){$replytext="55555555";}
                if($r==1){$replytext="คริๆๆๆ";}
                if($r==2){$replytext="ฮ่าๆๆๆๆๆ";}
                if($r==3){$replytext="ถถถถถถถถถ";}
                if($r==4){$replytext="5555";}
                if($r==5){$replytext="ขำอะไรกัน";}
                if($r==6){$replytext="st:555.1";}
                if($r==7){$replytext="st:555.2";}
            }

            if ((strpos($text, 'ขำไร') !== false)||(strpos($text, 'ขำอะไร') !== false)) {
                $r=rand(0,5);
                if($r==0){$replytext="ไม่รู้ดิ";}
                if($r==1){$replytext="อยากขำ";}
                if($r==2){$replytext="แป่วววว";}
                if($r==3){$replytext="ขำไปเรื่อย";}
                if($r==4){$replytext="อุ้ยยย";}
                if($r==5){$replytext="นั่นดิ ขำอะไร";}
            }

            if ((strpos($text, 'กี่โมงแล้ว') !== false)) {
                $r=rand(0,1);
                if($r==0){$replytext="ดูบนจอดิ";}
                if($r==1){$replytext= date('H:i',time()+25200).' ครับ';}
            }

            if (strpos($text, 'ตะเองง') !== false) {
                $r=rand(0,2);
                if($r==0){$replytext="ว่างายยยยตะเอง";}
                if($r==1){$replytext="จ๋าาาา";}
                if($r==2){$replytext="ค้าบบบบ";}
            }

            if ((strpos($text, 'ใครวะ') !== false)) {
                $r=rand(0,2);
                if($r==0){$replytext="เออนั่นดิ ใครวะ";}
                if($r==1){$replytext="เออ ใครวะ";}
                if($r==2){$replytext="ไหนๆๆ ใคร";}
            }

            if ((strpos($text, 'ทำไมวะ') !== false)) {
                $r=rand(0,1);
                if($r==0){$replytext="เออ นั่นสิ";}
                if($r==1){$replytext="เออ ทำไม";}
            }

            if ((strpos($text, 'ยังไง') !== false)) {
                $r=rand(0,1);
                if($r==0){$replytext="อืมมม";}
                if($r==1){$replytext="อืมม ยังไงดี";}
              
            }

            if ((strpos($text, 'เออดิ') !== false)||(strpos($text, 'เออสิ') !== false)) {
                $r=rand(0,1);
                if($r==0){$replytext="ใช่ๆๆ ก็ว่าอยู่";}
                if($r==1){$replytext="ก็ว่าอยู่";}
              
            }

            if ((strpos($text, 'ไปมั้ย') !== false)) {
                $r=rand(0,1);
                if($r==0){$replytext="ไปไหน";}
                if($r==1){$replytext="น่าสนใจ";}
              
            }

            if ((strpos($text, 'ราคาทอง') !== false)||(strpos($text, 'ทองกี่บาท') !== false)) {
               $replytext=getgoldprice(); 
            }

            if ((strpos($text, 'ค่าเงิน') !== false)||(strpos($text, 'อัตราแลกเปลี่ยน') !== false)) {
               $replytext=getbahtprice(); 
            }

            if ((strpos($text, 'หาเบอร์') !== false)||(strpos($text, 'เบอร์โทร') !== false)||(strpos($text, 'ขอเบอร์') !== false)){
                $search=str_replace("ขอเบอร์โทร","",$text);
                $search=str_replace("เบอร์โทร","",$text);
                $search=str_replace("หาเบอร์โทรศัพท์","",$text);
                $search=str_replace("หาเบอร์","",$text);
                $search=str_replace("ขอเบอร์","",$text);
                
                $replytext=get_tel($search);
            }
  

            if ($replytext=='st:555.1'){
                $messages = [
                    'type' => 'sticker',
                    'packageId' => '1',
                    'stickerId' => '100'
                ];
            }elseif ($replytext=='st:555.2'){
                $messages = [
                    'type' => 'sticker',
                    'packageId' => '1',
                    'stickerId' => '110'
                ];

            }else{
                $messages = [
                    'type' => 'text',
                    'text' => $replytext
                ];
            }

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


function getgoldprice(){
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"http://www.thaigold.info/RealTimeDataV2/gtdata_.txt?t=".time());
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $server_output = curl_exec ($ch);
    curl_close ($ch);
    $ds = json_decode($server_output,true);
    $str="รับซื้อ ".number_format($ds[4]['bid'],0)."\r\nขายออก ".number_format($ds[4]['ask'],0)." ";
    $str.="\r\nราคาเมื่อเวลา ".$ds[0]['ask']." ครับผม";
    return $str;
}

function getbahtprice(){
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"http://www.thaigold.info/RealTimeDataV2/gtdata_.txt?t=".time());
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $server_output = curl_exec ($ch);
    curl_close ($ch);
    $ds = json_decode($server_output,true);
    $str="ค่าเงิน ".number_format($ds[3]['bid'],4)." บาทต่อ 1 USD จ้า";
    return $str;
}

function getUser($userid){
    global $access_token;
    $url = 'https://api.line.me/v2/bot/profile/'.$userid;
    $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $result = curl_exec($ch);
    curl_close($ch);

    return json_decode($result, true);
    
}

function get_tel($search) {
    $search=str_replace(" ","+",$search);
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'http://searchapi.yellowpages.co.th/api.jsp?id=&txtWhat='.$search.'&language=th&hits=5&page=1');
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);

	$dataxml = curl_exec ($ch);
	curl_close ($ch);

    $json = json_encode(simplexml_load_string($dataxml));
    $obj = json_decode($json,TRUE);

    $str="";
    foreach ($obj['documents'] as $doc){
        $str.=$doc['custnamet']."(".$doc['citynamet'].") โทร.".$doc['telno']."\r\n";
        //$str.="x";
    }
    //$str=$json;
    if($str==""){
        $str="หาแล้วไม่เจอ ".$search." ครับ";
    }
	return $str;

}

?>