<?php
/*============================================================================*/
// IF
if (true == true)
{
    echo "Pirmais tests";
}

//ieliek horizontāju līniju
echo "<hr />";

/*============================================================================*/
// IF ELSE
$a = "1";
// === pārbauda gan vērtību, gan vērtības tipu
// ar ==, "1" un 1 ir vienādi
// ar ===, "1" un 1 nav vienādi, jo "1" ir string, bet 1 - integer
if ($a === 1)
{
    echo "Otrais tests";
}
 else {
    echo "Otrais tests - fail";
}


echo "<hr />";

/*============================================================================*/
// IF ELSEIF ELSE
$b = 10;
if ($b == 1)
{
    echo "B ir 1";
}
elseif($b == 55)
{
    echo "B ir 55";
}
else
{
    echo "B nav 1 vai 55";
}

echo "<hr />";

/*============================================================================*/
//ĪSAIS IF ELSE PIERAKSTS
$d = 23;
//$o                        - mainīgais, kam piešķir IF ELSE rezultātu
//($d > 20)                 - Apgalvojums / pārbaude
//"Apgalvojums ir pareizs"  - Paziņojums, ja apgalvojums ir true
//"Apgalvojums NAV pareizs"  - Paziņojums, ja apgalvojums ir false

$o = ($d > 20) ? "Apgalvojums ir pareizs": "Apgalvojums NAV pareizs";
echo $o;


echo "<hr />";

/*============================================================================*/
//SWITCH
$vards = "Ahbar";
switch ($vards) {
    case "Janis":
        echo "Tavs vards ir ".$vards;
        break;
    case "Uldis":
        echo $vards.", nenopietns cilveks";
        break;
    case "Liga":
        echo "Ligosvetkos ".$vards." centisies parak nepiedzerties";
        break;
    case "Rihards":
        echo $vards." jau ir zem galda";
        break;
    default:
        echo $vards.", kas tu tads ??";
        break;
}