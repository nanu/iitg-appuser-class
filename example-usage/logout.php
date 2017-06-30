<?php require('config.php');

//logout the current user
$iitgAppUser->logout();

//return to the login page
header('Location: login.php');
exit;
?>
