<?php 
	if (isset($_GET['hub_mode']) && isset($_GET['hub_challenge']) && isset($_GET['hub_verify_token'])) {
		if ($_GET['hub_verify_token'] =='my_verify_token')
		echo $_GET['hub_challenge'];
	} else {
		$feedData = file_get_contents('php://input');
		$handle = fopen('test.txt', 'w');
		fwrite($handle,$feedData);
		fclose($handle);
		// if ($data->object=="page"){
		// 	$commentID = $data->entry[0]->changes[0]->value->comment_id;
		// 	$accessToken ="EAAD6KgoviUMBAJnDXaiiD6ZCGKbbl4UQpUZCjDHMRqpVh7ylpxc3LBjHwSbBhhGtVZALbvDg0ZCnooPE2ZCFALO2X0My9boayuHdzN7Ciu5LbYqkINR6VmC85pNISH7NaezdHahKonCS8BCaSGOrUMp7H5IuUV2CbZBVk7zlMZBSMTkq9ZAMDZA614h937IrlYnRJMug3ZB2Yx1wZDZD";
		// 	$reply ="Nhan dc tin ne";

		// 	$ch = curl_init();
		// 	curl_setopt($ch,CURLOPT_POST,1);
		// 	curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
		// 	curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
		// 	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		// 	curl_setopt($ch,CURLOPT_POSTFIELDS,"message=$reply&access_token=$accessToken");
		// 	curl_setopt($ch,CURLOPT_URL, "https://graph.facebook.com/v3.1/$commentID");
		// 	curl_setopt($ch,CURLOPT_USERAGENT,"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36");
		// 	$response = curl_exec($ch);
		// 	curl_close($ch);
		// }
	}
	http_response_code(200);
?>