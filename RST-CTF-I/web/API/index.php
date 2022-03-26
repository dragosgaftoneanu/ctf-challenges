<?php
$flagfinal = "RST{" . hash('sha256', 'asdga4e0yg9pho8dshgfo8sdgsdfsdf') . "}";
$flag = strrev(str_rot13(@$_GET['flag']));

if($flag === $flagfinal)
	echo json_encode(array("rezultat" => "corect", "flag_trimis_criptat" => md5((string) $flag)));
elseif(stristr($flagfinal, $flag))
	echo json_encode(array("rezultat" => "partial corect", "flag_trimis_criptat" => md5((string) $flag)));
else
	echo json_encode(array("rezultat" => "eroare", "flag_trimis_criptat" => md5((string) $flag)));
