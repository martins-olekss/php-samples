<?php            

//Loģika, kas apstrādā / izvada formas datus
if (isset($_POST['form-submit']))
{
    echo "Forma aizpildīta!<br />";
    echo "Norādītais vārds: {$_POST['fname']}<br />";
    echo "Norādītais uzvārds: {$_POST['lname']}<br />";
    echo "<hr />";
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