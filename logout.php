<?php

include 'google.php';

unset($_SESSION['access_token']);
$client->revokeToken();
session_destroy();

header("Location: index.php");
exit();

?>