<?php
	include_once '../lib/curl-helpers.php';

	$user = "13a3b20fa41aa80636cffe064abd3e07";
	$pass = "ac2097a20d8b989d1b4305bfdc170b4d";
	$authURL = "http://api.quejamatic.com/v1/session";

	$curlH = new CurlHelpers($user, $pass);

	$fields = array(
		'username' => $_GET['username'],
		'password' => $_GET['password'],
		'scopes' => 'login'
	);

	$response = $curlH->doCurlAuth($authURL, $fields);

	if ($response->code == 200){

		$response = $curlH->doGetCurlBearerAuth("http://api.quejamatic.com/v1/user/".$_GET['username']."/api", $response->access_token);

		if ($response->code == 200){
			$curlH->setKey($response->credenciales->client_id);
			$curlH->setSecret($response->credenciales->client_secret);

			$fields = array(
				'scopes' => 'administrator'
			);

			$response = $curlH->doCurlAuth($authURL, $fields);

			if ($response->code == 200){
				session_start();
				$_SESSION['token'] = $response->access_token;
				$_SESSION['username'] = $_GET['username'];
			}
		}
	}
    echo str_replace('\/','/',json_encode($response));
	//echo json_encode($response,JSON_UNESCAPED_SLASHES);

?>
