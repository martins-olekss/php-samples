
## Example CURL code ( feat. resmush.it )

Can be run in terminal or browser
```php
// Define constant for resmush.it URL to send request to
define('SERVICE_URL', 'http://api.resmush.it/ws.php');

// Some example images
$images = array(
    'https://upload.wikimedia.org/wikipedia/commons/2/25/Siam_lilacpoint.jpg',
    'https://upload.wikimedia.org/wikipedia/commons/3/32/Basil_body.jpg'
);

// Prepare empty error and response arrays
$error = array();
$responseData = array();

// Loop through image URLs, send to smushit, collect responses ( or errors )
foreach($images as $image) {
    $message = array("img" => $image);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, SERVICE_URL);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $message);
    curl_setopt($ch, CURLOPT_VERBOSE, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    $error[] = array(
        "errorNo" => curl_errno($ch),
        "error" => curl_error($ch)
    );

    curl_close($ch);
    $responseData[] = json_decode($response);
}

// Barbarically output errors and responses
echo "Errors:<br>";
var_dump($error);
echo "<br>Response:<br>";
var_dump($responseData);
```


