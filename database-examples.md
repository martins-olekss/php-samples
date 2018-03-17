
# Database example code
Disclaimer: 
- This is example code only, as are missing any input validation and sanitization.
- Inline code comments are in Latvian

## Common code
Use code bellow to define connection parameters and estabilish connection to database. This must be used before running any further examples
```php
/* PIESLĒGŠANĀS PARAMETRI */
//Tiek definētas kostantes
define("HOST", "127.0.0.1");
define("USER", "root");
define("DB", "itcrowd");
define("PASS", "");

/* PIESLĒGŠANĀS DATUBĀZEI */
//Definētās konstantes tiek izmantotas
$db = new PDO("mysql:host=".HOST.";dbname=".DB,USER,PASS,
              array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
              
//Parametrs, kas nosaka, ka kļūdas tiks izvadītas uz ekrāna
//Kamēr izstrādā programmu, ir ļoti noderīgs
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
```

## Database select
```php
/* DATU IZGŪŠANA */
$data = array();

//Vaicājums
$sql="SELECT id,name FROM room";
//Izpilda vaicājumu
//'or die' liek kodam apstāties, ja vaicājumu DB serveris nevar izpildīt (kļūda)
$q = $db->query($sql) or die("KĻŪDA!");
//ielasa izgūtos datus asociatīvajā masīvā
//masīva elementu atslēgas ir DB tabulas kolonnu nosaukumi
//piem., $data['username']
while($r = $q->fetch(PDO::FETCH_ASSOC)){
    $data[]=$r;
}

//FOREACH cikls iet caur $data apakšmasīviem (izgūtās rindiņas)
//un attēlo informāciju uz ekrāna
foreach ($data as $row)
{
    echo $row['id']. " : ".$row['name'];
    echo "<br />";
}
```

## Database insert

Form for data input. Parameters `action` value should be path to PHP file that will recieve POST data and using PDO, pass to the mysql.
```html
<form action='index.php' method='post'>
    <input type='text' name='atext'><br />
    <input type='text' name='btext'><br />
    <input type='submit' name='form-submit'>
</form>
```

PHP code that will handle recieving data and creating quesry
```php
if (isset($_POST['form-submit']))
{
    $atext = $_POST['atext'];
    $btext = $_POST['btext'];
    
    $sql = "INSERT INTO data SET title=:atext, text=:btext";
    $q = $db->prepare($sql);
    $q->execute(array(':atext'=>$atext,':btext'=>$btext));
}
```
