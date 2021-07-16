<?php

include 'google.php';

if(isset($_SESSION['access_token']))
{
	$client->setAccessToken($_SESSION['access_token']);
}
elseif (isset($_GET['code'])) 
{
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $_SESSION['access_token'] = $token;
}
else
{
	header("Location: index.php");
	exit();
}

$oAuth = new Google\Service\Oauth2($client);
$userData = $oAuth->userinfo_v2_me->get();

$_SESSION['id'] = $userData['id'];
$_SESSION['email'] = $userData['email'];
/* $_SESSION['gender'] = $userData['gender'];
$_SESSION['picture'] = $userData['picture'];
$_SESSION['familyName'] = $userData['familyName'];
$_SESSION['givenName'] = $userData['givenName']; */

header("Location: get.php");
exit();

?>