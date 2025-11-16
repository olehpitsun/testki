<?php

require __DIR__ . "/vendor/autoload.php";

$client = new Google\Client;



$client->addScope("email");
$client->addScope("profile");

$url = $client->createAuthUrl();

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Hello</title>
    </head>
    <body>
        <a href="<?= $url ?>">Sign in with Google</a>
    </body>
</html>