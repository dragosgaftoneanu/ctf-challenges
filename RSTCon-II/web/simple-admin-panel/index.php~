<?php
session_start();
if(@$_SESSION['login'] == "")
	@$_SESSION['login'] == 0;
?><!DOCTYPE html>
<html>
<head>
<title>Simple Admin panel</title>
</head>
<form action="" method="post">
Password: <input type="password" name="password"><br />
<input type="submit" value="Login">
</form><br />
<?php
$password = rotate(@$_POST['password'], 10);
if(@$_SESSION['login'] == 3)
{
	echo "Bruteforce blocat. Incearca alta varianta.";
}elseif($password == "d461de2ba13b3c0c093357dc4573f028")
{
	echo "RST{" . strtoupper(md5($_POST['password'])) . "}";
}elseif(@$_POST['password'] != "")
{
	@$_SESSION['login']++;
	echo "Parola incorecta. Mai ai " . (3 - @$_SESSION['login']) . " sanse.";
}

function rotate($string, $target, $current=0)
{
	$string = md5($string . "flag");
	if($target == $current)
	{
		return $string;
	}else{
		return rotate($string, $target, $current+1);
	}
}
?>
