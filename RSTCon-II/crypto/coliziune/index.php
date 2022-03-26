<!DOCTYPE html>
<html>
<head>
<title>Coliziune</title>
</head>
<body>
<h2>Coliziune</h2>
<p>Creeaza o coliziune in MD5 de string-uri pentru a primi flag-ul.</p>
<form action="" method="post">
Text 1: <input type="text" name="text1"><br /><br />
Text 2: <input type="text" name="text2"><br /><br />
<input type="submit" value="Verifica"><br /><br />
</form>
<?php
if(@$_POST['text1'] != "" && @$_POST['text2'] != "")
{
	$text1 = md5(@$_POST['text1']);
	$text2 = md5(@$_POST['text2']);
	if(@$_POST['text1'] == @$_POST['text2'])
	{
		echo "Textele trebuie sa fie diferite. Doar nu credeai ca e asa usor?";
	}elseif($text1 == $text2)
	{
		echo "RST{".strtoupper(md5("c0lision23!@#%$"))."}";
	}else{
		echo "Nu s-a produs o coliziune...<br /><br />Text 1: $text1<br />Text 2: $text2";
	}
}
?>
</body>
</html>