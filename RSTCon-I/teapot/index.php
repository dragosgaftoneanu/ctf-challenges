<?php
$flag = "RST{".hash("sha256", "ffsIHateHtAccessMisc0nf1gur4tion@@@@!!!!")."}";

if($_SERVER['REQUEST_METHOD'] == "OPTIONS")
{
	if($_SERVER['HTTP_USER_AGENT'] == "ceainic")
	{
		if(stristr($flag, $_SERVER['HTTP_ACCEPT']))
		{
			if($flag == $_SERVER['HTTP_ACCEPT'])
			{
				header("Content-Type: application/json", 1, 201);
				echo json_encode(array("raspuns" => 201, "mesaj" => "Cafeaua este gata."));
			}else{
				header("Content-Type: application/json", 1, 200);
				echo json_encode(array("raspuns" => 200, "mesaj" => "Esti aproape, literele introduse sunt in ingredient."));
			}
		}else{
			header("Content-Type: application/json", 1, 418);
			echo json_encode(array("raspuns" => 400, "mesaj" => "Nu ai adaugat corect ingredientul pentru cafea sau l-ai adaugat incorect. Foloseste Accept pentru a-l adauga."));
		}
	}else{
		header("Content-Type: application/json", 1, 418);
		echo json_encode(array("raspuns" => 418, "mesaj" => "Eu sunt un ceainic. Tu esti un ceainic?"));
	}
}else{
	header("Content-Type: application/json", 1, 400);
	echo json_encode(array("raspuns" => 400, "mesaj" => "Alegeti optiunile corecte pentru cafea."));
}