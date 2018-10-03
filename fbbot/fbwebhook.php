<?php 
	if (isset($_GET['hub_mode']) && isset($_GET['hub_challenge']) && isset($_GET['hub_verify_token'])) {
		if ($_GET['hub_verify_token'] =='my_verify_token')
		echo $_GET['hub_challenge'];
	} else {
		$feedData = file_get_contents('php://input');
		if ($data->object=="page"){
			$postID = $data->entry[0]->changes[0]->value->post_id;
			$accessToken ="EAAD6KgoviUMBAO6CBUjaSE0ZB3kmmJEGVGhJNLoQgO4CZC95tfNtVco1LMBhz8RcOhJ8a6xz6f34ZA7wypR7KKs8zMC1q7XGpPQqBHxrxHzHAZB8ZBrl0P0JuAXhfRSYhy3IlmSQOweuNpoeVey2vdtPQ6VClboEBxd6BBXbDtgByO9My7HPaVejddVqVP5AZD";
			$reply ="Nhan dc tin ne";

			$ch = curl_init();
			curl_setopt($ch,CURLOPT_POST,1);
			curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
			curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
			curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
			curl_setopt($ch,CURLOPT_POSTFIELDS,"message=$reply&access_token=$accessToken");
			curl_setopt($ch,CURLOPT_URL, "https://graph.facebook.com/$postID/webhook30sphp")
			curl_setopt($ch,CURLOPT_USERAGENT,"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36");
			$response = curl_exec($ch);
			curl_close($ch);
		}
	}
	http_response_code(200);
?>