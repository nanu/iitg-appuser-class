<?php
/*
 * config.php
 * 
 * Main configuration file of the POP Authentication Application.
 * 
 * Set the respective values as per your local requirements.
 *
 * Written by: Nanu Alan Kachari, Department of CSE, IIT Guwahati on 7 July 2017
 * 
 */

//turn on output buffering
ob_start();

//assign a name to this session, avoids collision between the $_SESSION keys
session_name('popauthentication');

//start new or resume existing session
session_start();

//set your timezone here
date_default_timezone_set('Asia/Calcutta');

//set your application title here
define('APPTITLE','POP Authentication System');

//set your application captcha image parameters here
define('CAPTCHAWIDTH','250');
define('CAPTCHAHEIGHT','70');
define('CAPTCHACHARS','5');
define('CAPTCHALINES','50');
define('CAPTCHAFONTSIZE','50');
define('CAPTCHAFONTANGLE','0');
define('CAPTCHAFONT','fonts/xeroxmalfunction.ttf');

//set your database credentials here
define('DBHOST','mydbhost');
define('DBUSER','mydbusername');
define('DBPASS','mydbpassword');
define('DBNAME','mydbname');
define('DBCHARSET','utf8');

//set your ACL database table settings here
define('MEMBERS','myacltable');
define('CHECKINFIELD','mytablefield');

//classes used by the application
require('classes/Database.php');
require('classes/iitg-appuser-class.php');
require('classes/iitg-captcha-class.php');

//instantiate the $IITGAppUser
$iitgAppUser = new IITGAppUser;
?>
