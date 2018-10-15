<?php 


	function firebasesend($json){


	$url = "https://fcm.googleapis.com/fcm/send";
	$serverKey = 'Server Key Goes Here';
    $headers = array();
    $headers[] = 'Content-Type: application/json';
    $headers[] = 'Authorization: key='. $serverKey;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
    curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
    //Send the request
    $response = curl_exec($ch);
    //Close request
    if ($response === FALSE) {
    die('FCM Send Error: ' . curl_error($ch));
    }
    curl_close($ch);
	
}


		$notification = array(
						'title' =>$_POST['title'], 
						'body' => $_POST['body'], 
						'click_action'=> $_POST['url'],
						'icon'=>$_POST['icon'],
						'sound' => 'default',
						'badge' => '1');
		
				
				$datamain=array();
				
				
				/***********  (not required) *******/
				$datamain['title']=$_POST['title'];
				$datamain['body']=$_POST['body'];
				for ($x = 1; $x <= 10; $x++) {
					if($_POST['data'.$x]!=""){
						$datamain[$_POST['data'.$x]]=$_POST['val'.$x];
					}
				} 
				/***********  (not required) *******/
		
		$arrayToSend = array('to' => $_POST['token'], 'notification' => $notification,'priority'=>'high','data'=>$datamain);
		$json = json_encode($arrayToSend);
		firebasesend($json);
		
		?>