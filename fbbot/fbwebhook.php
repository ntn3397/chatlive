<?php 
	if (isset($_GET['hub_mode']) && isset($_GET['hub_challenge']) && isset($_GET['hub_verify_token'])) {
		if ($_GET['hub_verify_token'] =='my_verify_token')
		echo $_GET['hub_challenge'];
	} else {
		$feedData = file_get_contents('php://input');
		$handle = fopen('test.txt','w');
		fwrite($handle, $feedData);
		fclose($handle);
	}
	http_response_code(200);
?>