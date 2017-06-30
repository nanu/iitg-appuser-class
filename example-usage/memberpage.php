<?php
require_once('config.php'); 

//Check if the user is logged in
if( !$iitgAppUser->is_logged_in() )
{
	//user is not logged in
	header('Location: login.php');//redirect to the login page
	exit;
}

//Check if the user has logged in, if so, display relavent secure links */
if( $iitgAppUser->is_logged_in() )
{
	/* SECURE CONTENT START */

	//include the page-header
	require_once('header.php');
	
?>
	<pre>Welcome you have successfully logged in!</pre>
<?php

	//include the page-footer
	require_once('footer.php');
	
	/* SECURE CONTENT END */
}
?>
