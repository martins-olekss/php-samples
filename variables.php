<?php

/* ============== Mainīgo definēšana ================================*/
//Mainigie
$a = "zurnals"; //string

$b = 10; //int

$c = 1.20; //float

$d = array(1,"a",1.1); //masīvs

//bonus
//asociatīvais masīvs
$e = array(
	"suns"=>"tobis",
	"kakis"=>"kakis"
);

//Konstantes
//nemainīgu parametru glabāšanai
define('DB_NAME','MY_DB');
	

	
/* ====================== Izvadīšana uz ekrāna ======================*/
echo $a; //Mainīgo vērtību attēlošana uz ekrāna
echo "</br>"; //Pāriet nākošā rindiņā - skaidrības labad

echo $a.$b; //Apvieno divus dažadu tipu mainigos
echo "</br>"; //Pāriet nākošā rindiņā - skaidrības labad

echo $b." ".$c; //Apvieno divus dažadu tipu mainigos ar atstarpi
echo "</br>"; //Pāriet nākošā rindiņā - skaidrības labad

print_r($d); //Izvada visu masiva saturu
echo "</br>";

print_r($e); //Izvada visu asociatīvā masiva saturu
echo "</br>";

//Konstante
echo DB_NAME;


?>

