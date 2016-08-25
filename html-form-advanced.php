<?php            
//Loģika, kas apstrādā / izvada formas datus
if (isset($_POST['form-submit']))
{
  echo "Forma aizpildīta!<br />";
  echo "Norādītais vārds: {$_POST['fname']}<br />";
  echo "Norādītais uzvārds: {$_POST['lname']}<br />";
  echo "<hr />";
  
  define("HOST", "127.0.0.1");
  define("USER", "root");
  define("DB", "phpshack");
  define("PASS", "");
  
  /* PIESLĒGŠANĀS BATUBĀZEI */
  //Definētās konstantes tiek izmantotas
  $db = new PDO("mysql:host=".HOST.";dbname=".DB,USER,PASS,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
  //Parametrs, kas nosaka, ka kļūdas tiks izvadītas uz ekrāna
  //Kamēr izstrādā programmu, ir ļoti noderīgs
  $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
  
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  
  // Šim piemēram tabulai data jāeksistē iekš "phpshack" datubāzes
  // Tabulai jābūt 2 obligātajiem (required) laukiem - fname un lname
  $sql = "INSERT INTO data SET fname=:fname, lname=:lname";
  $q = $db->prepare($sql);
  $q->execute(array(':fname'=>$fname,':lname'=>$lname));
    
}
else
{
    echo "Aizpildiet formu!";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formas</title>
    </head>
    <body>
        
        <h1>Forma</h1>
        <form action='index.php' method="post">
            <input type='text' name='fname' placeholder="Vārds"><br /><br />
            <input type='text' name='lname' placeholder="Uzvārds"><br /><br />
            <input type='submit' name='form-submit' value='OK'><br />
        <form>
        
    </body>
</html>
