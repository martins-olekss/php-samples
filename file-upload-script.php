<?php
//Masīvs ar atļautajiem failu tipiem
$allowedExts = array(
    "gif", "GIF",
    "jpeg", "jpg", 
    "png", "PNG"
);

//Maksimālais atļautais faila izmērs
//200 kb
$maxSize = 200 * 1000;

//Atdala faila nosaukumu no paplašinājuma
//Saglabā masīva veidā iekš $temp mainīgā
$temp = explode(".", $_FILES["file"]["name"]);

//Saglabā pēdējo masīva elementu
//šajā gadījumā tas ir faila paplašinājums
$extension = end($temp);

//Pārbauda faila tipu, izmēru un atļautos paplašinājumus
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < $maxSize)
&& in_array($extension, $allowedExts)) {
    if ($_FILES["file"]["error"] > 0) {
        
        //Izvada kļūdu, ja tāda rodās
        echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    } 
    else 
    {
        //Attēlo informāciju par augšupielādēto failu
        echo "Upload: " . $_FILES["file"]["name"] . "<br>";
        echo "Type: " . $_FILES["file"]["type"] . "<br>";
        echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
        echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

        //Pārbauda vai šāds fails jau neeksistē
        if (file_exists("files/" . $_FILES["file"]["name"])) 
        {
            //Izvada paziņojumu, ka šāds fails jau eksistē
            echo $_FILES["file"]["name"] . " already exists. ";
        } else {
            //Ja viss kārtībā, fails tiek pārvietots no servera temp mapes
            //uz norādīto mapi - šajā gadījumā 'files'
            move_uploaded_file(
                  $_FILES["file"]["tmp_name"], 
                  "files/" . $_FILES["file"]["name"]
            );

            //Izvada paziņojumu par faila novietošanu
            echo "Stored in: " . "files/" . $_FILES["file"]["name"];
      }
    }
} 
else 
{
    //Fails neatbilst nosacījumiem
    echo "Invalid file";
}

