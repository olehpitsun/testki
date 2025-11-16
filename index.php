<?php

require __DIR__ . "/vendor/autoload.php";

$client = new Google\Client;

$client->setClientId("581123649038-unl355sa3d6lg5hfknaq1kihp7nvhfpi.apps.googleusercontent.com");
$client->setClientSecret("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");
$client->setRedirectUri("http://localhost/redirect.php");

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