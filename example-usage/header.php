<!DOCTYPE html>
<html class="no-js" lang='en'>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="IITG Webmail Authentication Application">
    <meta name="author" content="Nanu Alan Kachari">
    <title><?php if (defined('APPTITLE')) { echo APPTITLE; } ?></title>
</head>

<body>

<center>

	<?php
	//Check if the user is logged in
	if( $iitgAppUser->is_logged_in() )
	{
		if(isset($_SESSION['username'])){ echo "<pre>Welcome ".$_SESSION['username']." to ".APPTITLE."</pre>"; }else{ echo "<pre>Welcome ".$_SESSION['username']." to ".APPTITLE."</pre>"; }
		
		//include the mainmenu
		include_once("menu.php");
		
		//include the separator line
		echo "<hr style='width: 100%; background:#FF0000; border:0; height:1px;' />";
	}
	?>
	<div class="container">

		<div class="row">
