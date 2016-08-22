<?php

//Mainīgie ar vērtībām
$min = 1;
$max = 20000;

//Vienkārša PHP iebūvētā funkcija, kas izvada random skaitli
//ar vērtību starp min un max vērtībām
echo rand($min, $max);
echo "<hr />";

//Funkcijas definēšana
//Funkcijas parametri
//$min, $max, $msg
//* parametram $msg ir nodefinēta noklusētā vērtība, 
// ja izsaucot funkciju, šis parametrs netiks noteikts, 
// tiks pieņemta noklusētā vērtība
function myFunction($min, $max, $msg = "Funkcijas vertiba : ")
{   
    //There is function in my function!
    return $msg. " " .rand($min, $max);
}

//Izsauc funkciju, nenorādot trešo parametru
//tiek izvadīta noklusētā $msg vērtība
echo myFunction(1, 200);
echo "<hr />";

//Izsauc funkciju, norādot trešo parametru
//tiek izvadīta noteiktā $msg vērtība
echo myFunction(250, 300, "WTF am I doing ??? : ");