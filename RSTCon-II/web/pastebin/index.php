<?php
session_start();
?><!DOCTYPE html>
<html>
<head>
<title>RST pastebin</title>
</head>
<body>
<h2>RST pastebin</h2>
<?php
if(@$_GET['id'] == "flag" && validateSecret(@$_GET['id']) == @$_GET['secret'])
{
	$flag = "RST{".strtoupper(md5("nowd0c!!@3"))."}";
	echo "<textarea style=\"width:300px;height:50px\">$flag</textarea>";
}elseif(@$_GET['id'] != "" && validateSecret(@$_GET['id']) == @$_GET['secret']){
	echo "<textarea style=\"width:300px;height:50px\">$_SESSION[content]</textarea>";
}else{
	if(@$_POST['post'] != "")
	{
		$_SESSION['content'] = $_POST['post'];
		$id = rand(1,1000);
		echo "Postarea a fost salvata. Intra <a href=\"?id=".$id."&secret=".validateSecret($id)."\">aici</a> pentru a o vedea.<br />";
	}
	echo "<form action=\"\" method=\"post\"><textarea style=\"width:300px;height:50px\" name=\"post\"></textarea><br /><input type=\"submit\" value=\"post\"></form>";
}

function validateSecret($id)
{
	$secretUuid = sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),mt_rand( 0, 0xffff ),mt_rand( 0, 0x0fff ) | 0x4000,mt_rand( 0, 0x3fff ) | 0x8000,mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ));
	return md5('secret-${secretUuid}' . $id);
}
?>
</body>
</html>