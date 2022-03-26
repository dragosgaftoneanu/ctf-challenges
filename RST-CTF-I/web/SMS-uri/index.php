<?php
$verb = $_SERVER['REQUEST_METHOD'];
if(in_array($verb, array("GET", "POST", "PUT", "PATCH", "DELETE", "HEAD", "OPTIONS")))
{
	die(json_encode(array("eroare" => $verb . " este blocat la nivel de server.")));
}
echo json_encode(
	array(
		"autor" => array(
			"id" => 453,
			"nume_rst" => "Alex"
		),
		"mesaje" => array(
			array(
				"data" => "04/17 8:05 AM",
				"culoare" => "#6d6573",
				"mesaj" => "Tocmai am citit despre aplicatia asta noua si mi-am facut un cont. Sper ca imi cripteaza datele."
			),
			array(
				"data" => "04/17 8:15 AM",
				"culoare" => "#616a65",
				"mesaj" => "Am intzeles acum intrun final ce inseamna sha256 si cum se crypteaza datele."
			),
			array(
				"data" => "04/17 9:30 AM",
				"culoare" => "#647562",
				"mesaj" => "Mama zice ca stau prea mult pe calculator. Zice sa ies afara, sa vedem daca pot sa scriu ceva cu telefonul meu busit."
			),
			array(
				"data" => "04/17 10:01 AM",
				"culoare" => "#696f61",
				"mesaj" => "o zi obiSnuitA de weekend, nimic sPecial. soarele e pe cer, nu sTim daca va mai ningE, vremea e HAZLIE."
			),
			array(
				"data" => "04/17 10:15 AM",
				"culoare" => "#73653f",
				"mesaj" => "Aplicatie de cacao, nu cripteaza nimic, oricine poate sa-mi vada mesajele. Imi sterg contul."
			)
		)
	)
);