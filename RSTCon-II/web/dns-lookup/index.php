<!DOCTYPE html>
<html>
<head>
<title>DNS tools</title>
</head>
<body>
<h2>Lookup</h2>
<form action="" method="get">
URL: <input type="text" name="url"><br /><br />
<input type="submit" value="Lookup">
</form>
<br /><br />
<?php
if(@$_GET['url'] != "")
{
	preg_match('/([a-z]*\.[a-z]*)/', @$_GET['url'], $matches);
	if(empty($matches))
	{
		echo "URL-ul este invalid.";
	}else{
		echo "<h3>Intrari A</h3>";
		echo exec("dig " . $matches[1] . " A +short");
		echo "<h3>Intrari TXT</h3>";
		echo exec("dig " . $matches[1] . " TXT +short");
		echo "<h3>Intrari MX</h3>";
		echo exec("dig " . $matches[1] . " MX +short");
	}
}
?><br /><br />
<h2>Autentificare</h2>
<form action="" method="post">
Utilizator: <input type="text" name="username"><br /><br />
Parola: <input type="text" name="password"><br /><br />
<input type="submit" value="Autentificare">
</form><br /><br />
<?php
if($_POST['username'] !="" && $_POST['password'] != "")
{
	echo "Credentialele sunt incorecte.";
}
?>
</body>
</html>