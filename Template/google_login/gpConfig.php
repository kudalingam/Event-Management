<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '118158349606-5kv5smelhlhm3jmskohlsmncue1nvlvf.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'kloPZpN_BS2g0DBGVhQBTGXJ'; //Google client secret
$redirectURL = 'http://localhost/login/Home.php'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Event Management');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>