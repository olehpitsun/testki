<?php

require __DIR__ . "/vendor/autoload.php";

$client = new Google\Client;

$client->setClientId("581123649038-unl355sa3d6lg5hfknaq1kihp7nvhfpi.apps.googleusercontent.com");
$client->setClientSecret("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");
$client->setRedirectUri("http://localhost/redirect.php");

if ( ! isset($_GET["code"])) {

    exit("Login failed");

}

$token = $client->fetchAccessTokenWithAuthCode($_GET["code"]);

$client->setAccessToken($token["access_token"]);

$oauth = new Google\Service\Oauth2($client);

$userinfo = $oauth->userinfo->get();

var_dump(
    $userinfo->email,
    $userinfo->familyName,
    $userinfo->givenName,
    $userinfo->name
);