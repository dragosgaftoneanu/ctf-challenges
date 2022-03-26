<?php
include "authlogic.php";
session_start();
if(!empty($_POST['access_token']))
{
	try
	{
		$jwt = (new SimpleJWTVerifier($_POST['access_token']))->verify();
		$_SESSION['user'] = $jwt['sub'];
		header("Location: dashboard.php");
	}catch(Exception $e){
		echo $e;
	}
}else{
	header("Location: logout.php");
}