<?php
$mysql = mysqli_connect("localhost", "root", "", "ctf");
$sql = $mysql->query("select * from rstcoin where IP='".$_SERVER['REMOTE_ADDR']."'");
if($sql->num_rows == 0)
{
	$mysql->query("INSERT INTO rstcoin(name,value,IP) values('rstcoin', 0,'".$_SERVER['REMOTE_ADDR']."')");
	$mysql->query("INSERT INTO rstcoin(name,value,IP) values('restrictie', 0,'".$_SERVER['REMOTE_ADDR']."')");
}
?><!DOCTYPE html>
<html>
<head>
	<title>RSTCoin shop</title>
</head>
<body>
<h1>Cumpara RSTCoin</h1>
<?php
if(@$_GET['operatiune'] == "cumpara")
{
	prints("Se verifica daca este deja o restrictie implementata...");
	if(($mysql->query("select value from rstcoin where name='restrictie' and IP='".$_SERVER['REMOTE_ADDR']."'"))->fetch_array(MYSQLI_ASSOC)['value'] == 0)
	{
		prints("Nu exista o restrictie impusa...");
		prints("Cumpar RSTCoin...");
		$mysql->query("update rstcoin SET value=value+1 where name='rstcoin' and IP='".$_SERVER['REMOTE_ADDR']."'");

		prints("RSTCoin a fost cumparat, se verifica daca s-a ajuns la limita...");
		if(($mysql->query("select value from rstcoin where name='rstcoin' and IP='".$_SERVER['REMOTE_ADDR']."'"))->fetch_array(MYSQLI_ASSOC)['value'] >= 3)
		{
			prints("S-a atins limita, se impune restrictie...");
			$mysql->query("update rstcoin SET value=value+1 where name='restrictie' and IP='".$_SERVER['REMOTE_ADDR'] . "'");
			prints("Restrictia a fost impusa...");
		}else{
			prints("Nu s-a atins limita inca...");
		}
	}else{
		prints("Nu se mai pot cumpara RSTCoin pentru ca exista deja restrictie aplicata.");
	}
}
?>
<form action="" method="get">
<input type="hidden" name="operatiune" value="cumpara">
<input type="submit" value="Cumpara">
</form>
<h1>Reseteaza</h1>
<?php
if(@$_GET['operatiune'] == "reseteaza")
{
	$mysql->query("update rstcoin set value=0 where IP='".$_SERVER['REMOTE_ADDR']."'");
	prints("Portofelul a fost golit.");
}
?>
<form action="" method="get">
<input type="hidden" name="operatiune" value="reseteaza">
<input type="submit" value="Reseteaza">
</form>
<h1>Portofel</h1>
<strong>RSTCoin:</strong> <?php $rstcoin = ($mysql->query("select value from rstcoin where name='rstcoin' and IP='".$_SERVER['REMOTE_ADDR']."'"))->fetch_array(MYSQLI_ASSOC)['value']; echo $rstcoin; ?><br />
<strong>Flag:</strong> <?php echo $rstcoin >= 10 ? "Flag-ul nu a putut fi recuperat automat. Se include formularul de autentificare." : "Mai ai nevoie de " . (10 - $rstcoin) . " RSTCoin pentru a primi flag-ul.";  ?>

</body>
</html>
<?php
function prints($mesaj)
{
	echo $mesaj . "<br />";
	usleep(50000);
}
?>