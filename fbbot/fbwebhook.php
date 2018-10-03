<?php 
	if (isset($_GET['hub_mode']) && isset($_GET['hub_challenge']) && isset($_GET['hub_verify_token'])) {
		if ($_GET['hub_verify_token'] =='my_verify_token')
		echo $_GET['hub_challenge']
	}
	http_response_code(200);
?>