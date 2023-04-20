<?php
require_once 'config.php';
 

include_once $_SERVER['DOCUMENT_ROOT'] .  '/google/new-folder/dashboard/sociallogin.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/google/new-folder/google-api/vendor/autoload.php';





if (isset($_GET['code'])) {
 
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    if (!isset($token["error"])) {
        $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);


        // getting profile information
        $google_oauth = new Google_Service_Oauth2($client);
        $google_account_info = $google_oauth->userinfo->get();
        $userinfo = [

            'email' => $google_account_info['email'],
            'first_name' => $google_account_info['givenName'],
            'last_name' => $google_account_info['familyName'],



            'verifiedEmail' => $google_account_info['verifiedEmail'],
            'token' => $google_account_info['id'],
        ];
       

        
            

          
            

               echo $userinfo['email'];


             
         
       
    }
 
} else {

    if (!isset($_SESSION['user_token'])) {
        header("Location: {$hostname}/dashboard/login.php");
        die();
    }
}
