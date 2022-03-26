<?php
echo validateJwt($_COOKIE['jwt']);

function validateJwt($jwt)
{
	if(!stristr($jwt, "."))
		return "JWT format is invalid.";
	
	$parts = explode(".", $jwt);
	if(count($parts) != 3)
		return "JWT format is invalid.";
	
	$head = json_decode(base64_decode($parts[0]),1);
	$body = json_decode(base64_decode($parts[1]),1);
	
	if($head['kid'] != "flag" && $head['alg'] != "RS256")
		return "Invalid JWT header.";
	
	if($body['iat'] > time())
		return "JWT is issued in the future.";
	
	if($body['exp'] < time())
		return "JWT is expired.";
	
	if($body['aud'] != "rstcon")
		return "Invalid audience.";
	
	$privkey = file_get_contents("cert.txt");
	$pem = (openssl_pkey_get_details(openssl_pkey_get_private($privkey)))['key'];
	
	if(openssl_verify($parts[0] . "." . $parts[1], urlsafeB64Decode($parts[2]), $pem, OPENSSL_ALGO_SHA256))
	{
		return "RST{".md5("k33pPriv@t3k3yS@f3")."}";
	}else{
		return "Invalid signature.";
	}
}

function urlsafeB64Decode($input)
{
	$remainder = strlen($input) % 4;
	if ($remainder) {
		$padlen = 4 - $remainder;
		$input .= str_repeat('=', $padlen);
	}
	return base64_decode(strtr($input, '-_', '+/'));
}