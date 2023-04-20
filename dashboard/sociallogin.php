<?php

// require_once $_SERVER['DOCUMENT_ROOT'] . '/padandasgit/google-api/vendor/autoload.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/google/new-folder/google-api/vendor/autoload.php';


// Creating new google client instance
$client = new Google_Client();
// Enter your Client ID
$client->setClientId('client key');
// Enter your Client Secrect
$client->setClientSecret('secrete key');
// Enter the Redirect URL
$client->setRedirectUri('http://localhost/google/new-folder/dashboard/gauth.php');
// Adding those scopes which we want to get (email & profile Information)
$client->addScope("email");
$client->addScope("profile");
?>