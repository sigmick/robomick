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
            $groupid=$event['source']['groupId'];
            $roomid=$event['source']['roomId'];
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

            if ((strpos($text, 'ราคาน้ำมัน') !== false)||(strpos($text, 'น้ำมันกี่บาท') !== false)||(strpos($text, 'น้ำมันเท่าไร') !== false)||(strpos($text, 'น้ำมันเท่าไหร่') !== false)) {
               $replytext=getoilprice(); 
            }

            if ((strpos($text, 'ค่าเงิน') !== false)||(strpos($text, 'อัตราแลกเปลี่ยน') !== false)) {
               $replytext=getbahtprice(); 
            }

            if ((strpos($text, 'show id') !== false)) {
               $replytext="userid :".$uid ." | "."groupid :".$groupid ." | "."roomid :".$roomid ; 
            }

            if ((strpos($text, 'ไสหัวไป robomick') !== false)) {
               $replytext="ไปก็ได้ ไม่ต้องไล่" ;
               if(leaveGroup($groupid)){$replytext.=leaveGroup($groupid);}
               if(leaveRoom($roomid)){$replytext.=leaveRoom($roomid);}

            }

            

            if ((strpos($text, 'หาเบอร์') !== false)||(strpos($text, 'เบอร์โทร') !== false)||(strpos($text, 'ขอเบอร์') !== false)){
                $search=str_replace("ขอเบอร์โทร","",$text);
                $search=str_replace("เบอร์โทร","",$search);
                $search=str_replace("หาเบอร์โทรศัพท์","",$search);
                $search=str_replace("หาเบอร์","",$search);
                $search=str_replace("ขอเบอร์","",$search);
                
                $replytext=get_tel($search);
            }

            if ((strpos($text, 'งานอีเว้นท์') !== false)||(strpos($text, 'อีเว้นท์') !== false)||(strpos($text, 'รายละเอียดงาน') !== false)){
                $search=str_replace("งานอีเว้นท์","",$text);
                $search=str_replace("อีเว้นท์","",$search);
                $search=str_replace("ขอรายละเอียดงาน","",$search);
                $search=str_replace("อยากทราบรายละเอียดงาน","",$search);
                $search=str_replace("รายละเอียดงาน","",$search);
                
                
                $replytext=get_event($search);
            }
            if ((strpos($text, '$') !== false)){
                $usdbaht=get_exchangeusd_baht($text);
                if($usdbaht!=""){
                   $replytext= $usdbaht;
                }
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
function leaveGroup($groupId){
    global $access_token;
    $url = 'https://api.line.me/v2/bot/group/'. urlencode($groupId).'/leave';
    $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $result = curl_exec($ch);
    curl_close($ch);

    return json_decode($result, true);
}

function leaveRoom($roomId){
    global $access_token;
    $url = 'https://api.line.me/v2/bot/room/'. urlencode($roomId).'/leave';
    $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $result = curl_exec($ch);
    curl_close($ch);

    return json_decode($result, true);
}

function get_tel($searchword) {
    //$search=str_replace(" ","+",$search);
    $search=urlencode($searchword);
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'http://searchapi.yellowpages.co.th/api.jsp?id=&txtWhat='.$search.'&language=th&hits=20&page=1');
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);

	$dataxml = curl_exec ($ch);
	curl_close ($ch);

    $json = json_encode(simplexml_load_string($dataxml));
    $obj = json_decode($json,TRUE);

    $str="";
    foreach ($obj['documents']['document'] as $doc){
        $str.=$doc['custnamet']."(".$doc['citynamet'].") โทร. ".$doc['telno']."\r\n\r\n";
        //$str.="x";
    }
    //$str=$json;
    if($str==""){
        $str="หาแล้วไม่เจอ ".$searchword." ครับ";
    }
	return $str;

}

function get_event($searchword) {
    //$search=str_replace(" ","+",$search);
    $search=trim($search);
    $search=urlencode($searchword);
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'http://www.allthaievent.com/ws_admin.php?mode=eventlist&kw='.$search);
	curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    $server_output = curl_exec ($ch);
    curl_close ($ch);
    $ds = json_decode($server_output,true);

    $str="";
    $i=0;
    foreach ($ds  as $event){
        if($i<5){
            $str.=$event['eventName']." ".$event['eventTime']." ".$event['venueName']."\r\n\r\n";
        }
        $i++;
        
    }
    //$str=$json;
    if($str==""){
        $str="ไม่เจอครับ";
    }
	return $str;

}


function getoilprice() {
    $ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'http://www.allthaievent.com/ws_oilprice.php');
	curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    $server_output = curl_exec ($ch);
    curl_close ($ch);
    $ds = json_decode($server_output,true);


    $str="";
    foreach ($ds['DataAccess'] as $prod){
        if($prod['PRICE']!=''){
            $str.=$prod['PRODUCT']." ".$prod['PRICE']."\r\n";
        }
    }
	return $str;

}

function get_exchangeusd_baht($str){
    
    preg_match('/\$([0-9]+[\.]*[0-9]*)/', $str, $match);
    $dollar_amount="";
    if(count($match)>0){
        $dollar_amount = $match[1];
    }else{
        preg_match('/([0-9]+[\.]*[0-9]*)\$/', $str, $match);
        if(count($match)>0){
            $dollar_amount = $match[1];
        }	
    }

    if($dollar_amount!=""){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"http://www.thaigold.info/RealTimeDataV2/gtdata_.txt?t=".time());
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec ($ch);
        curl_close ($ch);
        $ds = json_decode($server_output,true);

        return number_format(($dollar_amount*$ds[3]['bid']),2) ." บาท";
    }else{
        return "";
    }

}
?>