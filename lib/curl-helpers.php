<?php
	class CurlHelpers{
		private $key;
		private $secret;

		public function __construct($_key, $_secret){
			$this->key = $_key;
			$this->secret = $_secret;
		}

		public function doCurlAuth($url, $params = array()){
			//url-ify the data for the POST
			$fields_string = "";
			foreach($params as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
			rtrim($fields_string, '&');

			$ch = curl_init();

			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
			curl_setopt($ch, CURLOPT_USERPWD, $this->key.":".$this->secret);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
			curl_setopt($ch, CURLOPT_UNRESTRICTED_AUTH, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // required as godaddy fails
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); // required as godaddy fails
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,1);
			curl_setopt($ch, CURLOPT_POST, count($params));
			curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
			if(defined('CURLOPT_IPRESOLVE') && defined('CURL_IPRESOLVE_V4'))
			{
		    curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
			}

			$output = curl_exec($ch);
			if(curl_errno($ch)){
			    echo 'Curl error: ' . curl_error($ch);
			}

			curl_close($ch);

			return json_decode($output);
		}

		public function doGetCurlBearerAuth($url, $access_token){
			$ch = curl_init();
			$headers = array('Authorization: Bearer ' . $access_token);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
			curl_setopt($ch, CURLOPT_UNRESTRICTED_AUTH, 1);
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,1);
            curl_setopt($ch, CURLOPT_HTTPGET,1);
			if(defined('CURLOPT_IPRESOLVE') && defined('CURL_IPRESOLVE_V4'))
			{
		    curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
			}

			$output = curl_exec($ch);

			print_r($url);
			print_r($output);
			curl_close($ch);

			return json_decode($output);
		}

		public function setKey($_key){
			$this->key = $_key;
		}

		public function setSecret($_secret){
			$this->secret = $_secret;
		}
	}
?>
