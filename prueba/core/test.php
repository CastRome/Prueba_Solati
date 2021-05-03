<?php
//echo("testo.core");

function getPlanet($planet){
//echo  file_get_contents("https://swapi.dev/api/planets/$planet/");
//return  file_get_contents("https://swapi.dev/api/planets/$planet/");

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://swapi.dev/api/planets/$planet/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$res = curl_exec($ch);
curl_close($ch);
return $res; 

}

//getPlanet(2);
//echo file_get_contents('https://api.mercadolibre.com/users/226384143/');
//echo($res);
//curl_close($ch);

